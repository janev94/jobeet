<?php

class JobeetCategoryAffiliate extends BaseJobeetCategoryAffiliate
{

	public function __toString()
	{
		return $this->getUrl();
	}
}
