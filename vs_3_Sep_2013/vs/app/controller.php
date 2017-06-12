<?php

class Controller {
	public $load;
	public $model;

	function __construct()
	{
		$this->load = new Load();
		$this->model = new Model();

		// determine what page we're on
		if (count($_GET)==0)
			$this->display('home');
		else if (isset($_GET['page']) && strlen($_GET['page'])>0)
			$this->display($_GET['page']);
		else if (isset($_GET['fetch']))
			$this->db($_GET['fetch']);
		else
			$this->error(404);
	}

        function db($fetch){
                if ($fetch == 'SVGallery'){
                        echo json_encode(array(
					'root' => APP_ROOT . '/res/images/swami_vivekananda/',
					'pics' => $this->model->get_SwamiVivekananda_pics(),
					'quotations' => $this->model->get_SwamiVivekananda_quotations()
					));
                }
                else if ($fetch == 'menu'){
                        echo json_encode($this->model->get_menu());
                }
        }

	function display($page)
	{
		$data = array(
				'announcements' => $this->model->get_announcements(),
                                'menu' => $this->model->get_menu()
			     );
		if (!$this->load->view('pages/'.$page.'.php', $data))
			$this->error(404);
	}

        function error($code){
		$data = array(
                                'menu' => $this->model->get_menu()
			     );
		$this->load->view('error/codes/' . $code . '.php', $data);
        }
}
