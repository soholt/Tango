<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Services_Apache extends Base {

    private $conf = NULL;

    public function before() {

        Fire::log(__METHOD__);

        parent::before(); //	MUST NEVER FORGET THIS
//parent::__controller();
        //if($this->login == TRUE) exit('add parent::before(); to ' . __METHOD__);//	TODO REDIRECT TO LOGIN

        $name = $this->request->controller();
        /*
          if(array_key_exists($name, $this->config['services']))
          {
          $this->conf = $this->config['services'][$name];

          if(!isset($this->conf['log'])) $this->conf['log'] = NULL;
          }

         *
         */
        //$this->end();
        //$this->response->render($this->template);
    }

    public function action_index() {

        $data = array();

        //	CANT DO ANYTHING AS THERE IS NO CONFIG FOR THIS DISTRO

        if (is_null($this->conf)) {
            $this->render(__('not available for your system yet'));
        }

        if (isset($this->conf['config'])) {// && file_exists($this->conf['config']))
            $data['service'] = $this->conf['service'];

            $data['config'] = $this->conf['config'];

            $data['log'] = (isset($this->conf['log'])) ? $this->conf['log'] : NULL;

            $data['actions'] = $this->os->svcActions($this->conf['service']);

            $data['status'] = $this->os->svcStatus($this->conf['service']);

            $this->render($data, $this->request->directory() . '/service'); //	CHANGE IT FOR CUSTOM SETUPS
        } else { //	SHARED(DEFAULT) INSTALL VIEW
            $this->render($data, $this->request->directory() . '/install');

            //	FOR directory/controller/install VIEW
            //$this->render($data, $this->request->directory() . '/' . $this->request->controller() . '/install');
        }
    }

    public function action_service() {

        $action = $this->request->param('id');

        Fire::info(__METHOD__ . ' ' . $action);

        switch ($action) {
            case 'install':

                $cmd = array();

                if (array_key_exists('packagePre', $this->conf)) {
                    $cmd[] = $this->conf['packagePre'];
                }

                if (array_key_exists('packageName', $this->conf)) {
                    $cmd[] = $this->os->pkgInstall($this->conf['packageName']);
                }

                if (array_key_exists('packagePost', $this->conf)) {
                    $cmd[] = $this->conf['packagePost'];
                }

                $this->sh($cmd);

                break;

            case 'status':
                echo $this->os->svcStatus($this->conf['service']);
                break;

            case 'kill':
                $sh[] = $this->os->svcKill($this->conf['service'], TRUE);
                $sh[] = $this->os->svcStatus($this->conf['service'], TRUE);
                $this->sh($sh);
                break;

            default:
                $sh[] = $this->os->svcAction($this->conf['service'], $action, TRUE);
                $sh[] = $this->os->svcStatus($this->conf['service'], TRUE);
                $this->sh($sh);
        }

        //$this->render();
    }

    public function action_backups() {
        $this->render($this->conf['config'], 'backups');
    }

    //AJAX
    /**
     *
     *
     * No get/post '?file=name' is needed, if the serviceConfig is_file()
     * If the serviceConfig is not a file, but a dir with many config files
     * You guessed it, 1 param is needed - ?file=name...
     *
     */
    public function action_config() {
        $level = $this->request->param('id');

        //	IF ITS A FILE, OPEN IT FOR EDITING

        if (is_file($this->conf['serviceConfig'])) {
            if ($level == 'advanced') {
                $this->render($this->read($this->conf['serviceConfig'], TRUE));
            } else {
                $this->render($this->read($this->conf['serviceConfig'], TRUE));
            }
        } else { //	ITS A DIR ?file=name must be present
            $file = $this->request->query('file');

            if (!is_null($file)) {
                if ($level == 'advanced') {
                    $this->render($this->read($this->conf['serviceConfig'] . '/' . $file, TRUE));
                } else {
                    $this->render($this->read($this->conf['serviceConfig'] . '/' . $file, TRUE));
                }
            }
        }
    }

    public function action_save() {


        //echo '<pre>'; print_r($_REQUEST);

        if (isset($_REQUEST['config'])) {
            $config = $_REQUEST['config'];
            /*
              $config = '';

              foreach ($_REQUEST['config'] as $line)
              {

              //$config .= str_replace(array(chr(10), chr(13)), "\n", $line);
              //$config .= "\n";
              //$config .= trim($line) . "\n";

              }
             */
            echo $this->write($this->config['services']['nfs']['config'], $config);
            //echo $this->write($this->read($this->config['services']['nfs']['config'], '');
        }
    }

    public function action_modules() {

        //	INSTALLED
        //$data['installed'] = $this->dirContent('/etc/apache2/mods-available');

        $data['installed'] = array();
        $data['enabled'] = array();
        $data['disabled'] = array();

        $installed = $this->dirContent('/etc/apache2/mods-available');

        if (count($installed) > 0) {
            foreach ($installed as $inst) {
                $_installed = explode('.', $inst);

                $data['installed'][$_installed[0]] = $_installed[1];
            }
        }

        //	ENABLED
        //$data['enabled'] = $this->dirContent('/etc/apache2/mods-enabled');

        $enabled = $this->dirContent('/etc/apache2/mods-enabled');

        if (count($enabled) > 0) {
            foreach ($enabled as $enab) {
                $_enabled = explode('.', $enab);

                $data['enabled'][$_enabled[0]] = $_enabled[1];
                //$data['enabled'][] = [$_enabled[0]] = $_enabled[1];
            }
        }

        //	DISABLED

        $data['disabled'] = array_diff_key($data['installed'], $data['enabled']);

        //	NOT INSTALLED
        /*
          $availableModsDirty = $this->run('apt-cache search ^libapache2-mod');

          if(count($availableModsDirty) > 0)
          {
          foreach($availableModsDirty as $val)
          {
          $availableMods = explode(' - ', $val);

          $data['not-installed'][$availableMods[0]] = $availableMods[1];

          }

          }

          //not needed $data['not-installed'] = array_diff($data['repository'], $data['installed']);
         */
        $this->render($data); //, 'services/apache/modules');
    }

    public function action_sites() {
        $data['installed'] = array();
        $data['enabled'] = array();
        $data['disabled'] = array();


        //	TODO restart service via services, sort out incoming vars

        if (isset($_GET['enable'])) {
            $cmd[] = 'sudo -u root a2ensite ' . $_GET['enable'];
            $cmd[] = 'sudo -u root /etc/init.d/apache2 reload';
            $data['result'] = $this->sh($cmd);
        }

        if (isset($_GET['disable'])) {
            $cmd[] = 'sudo -u root a2dissite ' . $_GET['disable'];
            $cmd[] = 'sudo -u root /etc/init.d/apache2 reload';
            $data['result'] = $this->sh($cmd);
        }

        $data['installed'] = $this->dirContent('/etc/apache2/sites-available');


        /*
          $installed = $this->dirContent('/etc/apache2/sites-available');

          if(count($installed) > 0)
          {
          foreach($installed as $inst)
          {
          $_installed = explode('.', $inst);

          $data['installed'][$_installed[0]] = $_installed[1];
          }
          }
         */
        //	ENABLED

        $data['enabled'] = $this->dirContent('/etc/apache2/sites-enabled');

        if (($key = array_search('000-default', $data['enabled'])) !== FALSE)
            $data['enabled'][$key] = 'default';
        //echo $key;
        /*
          $enabled = $this->dirContent('/etc/apache2/sites-enabled');

          if(count($enabled) > 0)
          {
          foreach($enabled as $enab)
          {
          $_enabled = explode('.', $enab);

          $data['enabled'][$_enabled[0]] = $_enabled[1];
          }
          }
         */
        //	DISABLED

        $data['disabled'] = array_diff($data['installed'], $data['enabled']);

        //	NOT INSTALLED
        /*
          $availableModsDirty = $this->run('apt-cache search ^libapache2-mod');

          if(count($availableModsDirty) > 0)
          {
          foreach($availableModsDirty as $val)
          {
          $availableMods = explode(' - ', $val);

          $data['not-installed'][$availableMods[0]] = $availableMods[1];

          }

          }

          //not needed $data['not-installed'] = array_diff($data['repository'], $data['installed']);
         */
        Fire::info($data);

        $this->render($data); //, 'services/apache/modules');
    }

    public function action_install_module() {
        $this->render($_REQUEST);
    }

    public function action_config_read() {
        $this->render($_REQUEST);
    }

    public function action_config_save() {
        $this->render($_REQUEST);
    }

}

//EOF
