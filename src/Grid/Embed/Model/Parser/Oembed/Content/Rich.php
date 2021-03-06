<?php

namespace Grid\Embed\Model\Parser\Oembed\Content;

use Grid\Embed\Model\Parser\Oembed\ContentAbstract;

/**
 * Default/link oembed content type adapter
 *
 * @author Kristof Matos <kristof.matos@megaweb.hu>
 */
class Rich extends ContentAbstract
{
    /**
     * Returns html code from oembed response data 
     * or FALSE if type does not match
     * 
     * @param object $oembedData
     * @return string|false
     */
    public function getEmbedHtml($oembedData)
    {
        if( $oembedData->type == 'rich' 
            && isset($oembedData->html) 
            && isset($oembedData->width)
            && isset($oembedData->height))
        {
            return  '<div data-embed-type="oembed/rich" '
                    .'data-embed-width="'.$oembedData->width.'" '
                    .'data-embed-height="'.$oembedData->height.'" >'
                    .$oembedData->html
                    .'</div>';
        }
        return false;
    }
}