class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	//$content_view - виды отображающие содержимое страниц
    // $data - массив, содержащий элементы контента страницы, заполняется обычно в модели
    
	function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		
		include 'application/views/'.$template_view;
	}
}
