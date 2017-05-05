<?php
require_once 'oss/autoload.php';
use OSS\OssClient;
use OSS\Core\OssException;

class Oss{
	private $accessKeyId = 'LTAIYx4frWDru6Yt';
	private $accessKeySecret = 'SSoDb1RVVkHrR568b2054gsXnGk9dE';
	private $endpoint = '.mmdili.com';
	private $bucket_view = 'mmview';
	private $bucket_doc = 'mmdoc';

	private $ossClient = null;

	function __construct()
	{
		// try {
	 //    	$this->ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, $this->endpoint);
		// } catch (OssException $e) {
	 //    	printf($e->getMessage()."\n");
		// 	die();
		// }
	}

	public function initOssClient($bucket)
	{
		try {
	    	$this->ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, $bucket.$this->endpoint, true);
		} catch (OssException $e) {
	    	printf($e->getMessage()."\n");
			die();
		}
	}

	public function uploadDir($prefix, $localDirectory)
	{
		$this->initOssClient($this->bucket_view);
    	try {
        	$this->ossClient->uploadDir($this->bucket_view, $prefix, $localDirectory);
    	}catch(OssException $e){
        	printf($e->getMessage()."\n");
        	return false;
	   	}
	    return true;
	}

	public function uploadFile($prefix, $localFile)
	{
		$this->initOssClient($this->bucket_doc);
    	try {
        	$this->ossClient->uploadFile($this->bucket_doc, $prefix, $localFile);
    	}catch(OssException $e){
        	printf($e->getMessage()."\n");
        	return false;
	   	}
	    return true;
	}

	public function checkDocExist($object)
	{
		$this->initOssClient($this->bucket_doc);
		try{
        	$exist = $this->ossClient->doesObjectExist($this->bucket_doc, $object);
	    } catch(OssException $e) {
	        printf($e->getMessage() . "\n");
	        return false;
	    }
	    return $exist;
	}

	function getSignedUrlForGettingObject($object, $timeout = 600)
	{
		// URL的有效期默认是600秒
	    $this->initOssClient($this->bucket_doc);
	    try{
	        $signedUrl = $this->ossClient->signUrl($this->bucket_doc, $object, $timeout);
	    } catch(OssException $e) {
	        printf($e->getMessage() . "\n");
	        return false;
	    }
	    return $signedUrl;
	}
}