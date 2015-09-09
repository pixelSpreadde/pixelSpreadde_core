<?php

namespace Contao;

class EnvironmentInsertTags
{
	public function replaceTags($strTag)
	{
		$arrTag = explode("::", $strTag);
		$value = false;

		switch(strtolower($arrTag[0]))
		{
			case "server":
				$value = $_SERVER[$arrTag[1]];
				break;
			case "post":
				$value = $_POST[$arrTag[1]];
				break;
			case "get":
				$value = $_GET[$arrTag[1]];
				break;
		}

		return $value;
	}
}