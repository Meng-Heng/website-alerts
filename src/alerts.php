<?php

namespace ParsedownAlerts;

use Parsedown;

class Alerts extends Parsedown
{
    function __construct()
    {
        $this->BlockTypes['>'][] = 'Blockquote';
    }

    protected function alert($line, $block)
    {                       // need to check this pregmatch
        if (preg_match('/\[\!+(IMPORTANT|NOTE|TIPS|CAUTION|WARNING)]/gm', $block['text'], $matches)) { 
            return array(
                'char' => $line['text'][0],
                'extent' => str($matches[0]),
                'element' => array(
                    'name' => 'blockquote',
                    'text' => $matches[1],
                    'attributes' => array(
                        'style' => 'color: red'
                    )
                )
            );
        }
    }
    protected function alertContinue($line, $block) {
        if(isset($block['complete'])) {
            return;
        }

        if(preg_match('//', $line['text'])) { //pregmatch for continue
            $block['complete'] = true;
            return $block;
        }
    }

    protected function alertComplete($line, $block) {
        if(preg_match('/^\n/', $line['text'])) { // this pregmatch is correct
            return $block;
        }
    }
}
