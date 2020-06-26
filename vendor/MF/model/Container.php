<?php
namespace MF\Model;
use App\Connection;

class Container{

	public static function getModel($model)
	{
		$classContainer = "\\App\\Models\\".ucfirst($model);
		$conn = Connection::getDb();
		return new $classContainer($conn);
	}
}
?>