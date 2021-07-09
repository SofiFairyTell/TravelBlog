class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
    //действие, которое было вызвано по умолчанию
	function action_index()
	{
	}
}