<?php
namespace OpenSearchServer\Crawler\Web\Patterns\Inclusion;

use OpenSearchServer\Crawler\Web\Patterns\GetList as PatternsGetList;
class GetList extends PatternsGetList
{
	/******************************
	 * INHERITED METHODS OVERRIDDEN
	 ******************************/	
    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
    	$this->checkPathIndexNeeded();
        return rawurlencode($this->options['index']).'/crawler/web/patterns/inclusion';
    }
}