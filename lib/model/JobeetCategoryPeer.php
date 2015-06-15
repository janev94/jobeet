<?php

class JobeetCategoryPeer extends BaseJobeetCategoryPeer
{
	public static function getWithJobs()
	{
		$criteria = new Criteria();
		$criteria->addJoin(self::ID, JobeetJobPeer::CATEGORY_ID);
		$criteria->add(JobeetJobPeer::EXPIRES_AT, time(), Criteria::GREATER_THAN);
		$criteria->setDistinct();
		$criteria->add(JobeetJobPeer::IS_ACTIVATED, true);
		
		return self::doSelect($criteria);
	}
	
}
