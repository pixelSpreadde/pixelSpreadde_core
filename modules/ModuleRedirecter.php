<?php

namespace pixelSpreadde\Frontend;

class ModuleRedirecter extends \Module
{
	protected $strTemplate = 'mod_redirecter';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### REDIRECTER ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}

	protected function compile()
	{
		if((!FE_USER_LOGGED_IN && $this->redirecter_guests) OR (FE_USER_LOGGED_IN && $this->redirecter_protected))
		{
			$objPage = \PageModel::findById($this->jumpTo);
			$this->redirect($this->generateFrontendUrl($objPage->row(), ''));
		}
	}
}