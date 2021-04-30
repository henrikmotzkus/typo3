<?php

class Standard_action_show_f890f2439c7ccc3d0128b37ae79f06263bf24b25 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'DocHeader';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
        <div class="viewpage-item">
            <div class="viewpage-topbar t3js-viewpage-topbar">
                <div class="viewpage-topbar-orientation t3js-viewpage-topbar-orientation">
                    <a href="#" class="t3js-change-orientation">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.orientation', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output8 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output8 .= '
                    </a>
                </div>
                <div class="viewpage-topbar-preset">
                <span class="dropdown">
                    <button class="dropdown-toggle" type="button" id="viewpage-topbar-preset-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="t3js-viewpage-current-label">
                            ';
$array12 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.label', $array12)]);

$output8 .= '
                        </span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="viewpage-topbar-preset-button">
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#" class="t3js-preset-maximized t3js-change-preset" data-key="maximized" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'maximized';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output8 .= '" data-width data-height>
                                <span class="viewpage-preset-item">
                                    <span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.fullscreen', $array17);
};
$arguments15 = array();
$arguments15['value'] = NULL;

$output8 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output8 .= '</span>
                                    <span class="viewpage-preset-item-label">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['languageKey'] = NULL;
$arguments18['alternativeLanguageKeys'] = NULL;
$arguments18['key'] = 'maximized';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output8 .= '
                                    </span>
                                    <span class="viewpage-preset-item-size">
                                        100%/100%
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="t3js-preset-custom t3js-change-preset" data-key="custom" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'custom';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output8 .= '" data-width="';
$array22 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array22)]);

$output8 .= '" data-height="';
$array23 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array23)]);

$output8 .= '">
                                <span class="viewpage-preset-item">
                                    <span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.expand', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output8 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output8 .= '</span>
                                    <span class="viewpage-preset-item-label t3js-preset-custom-label">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'custom';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output8 .= '
                                    </span>
                                    <span class="viewpage-preset-item-size">
                                        <span class="t3js-preset-custom-width">';
$array29 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array29)]);

$output8 .= '</span>px/<span class="t3js-preset-custom-height">';
$array30 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array30)]);

$output8 .= '</span>px
                                    </span>
                                </span>
                            </a>
                        </li>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                                <li role="separator" class="divider"></li>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                                    <li>
                                        <a href="#" class="t3js-change-preset" data-key="';
$array45 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.key', $array45)]);

$output44 .= '" data-label="';
$array46 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array46)]);

$output44 .= '" data-width="';
$array47 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array47)]);

$output44 .= '" data-height="';
$array48 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array48)]);

$output44 .= '">
                                            <span class="viewpage-preset-item">
                                                <span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.{preset.type}', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output44 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output44 .= '</span>
                                                <span class="viewpage-preset-item-label">';
$array52 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array52)]);

$output44 .= '</span>
                                                <span class="viewpage-preset-item-size">
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('preset.width', $array56);

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$output58 = '';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array59)]);

$output58 .= 'px';
$arguments53['then'] = $output58;
$arguments53['else'] = '100%';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output44 .= '/';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('preset.height', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$output65 = '';
$array66 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array66)]);

$output65 .= 'px';
$arguments60['then'] = $output65;
$arguments60['else'] = '100%';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output44 .= '
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                ';
return $output44;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$array43 = array (
);$arguments41['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array43);
$arguments41['as'] = 'preset';

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                            ';
return $output40;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['0'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array38);

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression39(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                        ';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroups', $array33);
$arguments31['as'] = 'presetGroup';
$arguments31['iteration'] = 'presetGroupIteration';

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output8 .= '
                    </ul>
                </span>
                </div>
                <div class="viewpage-topbar-size">
                    <input class="t3js-viewpage-input-width" type="number" name="width" min="300" max="9999" value="';
$array67 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array67)]);

$output8 .= '">
                    x
                    <input class="t3js-viewpage-input-height" type="number" name="height" min="300" max="9999" value="';
$array68 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array68)]);

$output8 .= '">
                </div>
            </div>
            <div class="viewpage-resizeable t3js-viewpage-resizeable" style="width:';
$array69 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array69)]);

$output8 .= 'px;height:';
$array70 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array70)]);

$output8 .= 'px;">
                <iframe src="';
$array71 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array71)]);

$output8 .= '" width="100%" height="100%" id="tx_viewpage_iframe" frameborder="0" border="0" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:iframe.title';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output8 .= '"></iframe>
            </div>
        </div>
    ';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output74 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['name'] = NULL;
$arguments75['name'] = 'DocHeader';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output74 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['queueIdentifier'] = NULL;
$arguments80['as'] = NULL;

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
        <div class="viewpage-item">
            <div class="viewpage-topbar t3js-viewpage-topbar">
                <div class="viewpage-topbar-orientation t3js-viewpage-topbar-orientation">
                    <a href="#" class="t3js-change-orientation">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array90 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.orientation', $array90);
};
$arguments88 = array();
$arguments88['value'] = NULL;

$output87 .= isset($arguments88['value']) ? $arguments88['value'] : $renderChildrenClosure89();

$output87 .= '
                    </a>
                </div>
                <div class="viewpage-topbar-preset">
                <span class="dropdown">
                    <button class="dropdown-toggle" type="button" id="viewpage-topbar-preset-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="t3js-viewpage-current-label">
                            ';
$array91 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.label', $array91)]);

$output87 .= '
                        </span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="viewpage-topbar-preset-button">
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#" class="t3js-preset-maximized t3js-change-preset" data-key="maximized" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['languageKey'] = NULL;
$arguments92['alternativeLanguageKeys'] = NULL;
$arguments92['key'] = 'maximized';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output87 .= '" data-width data-height>
                                <span class="viewpage-preset-item">
                                    <span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.fullscreen', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output87 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output87 .= '</span>
                                    <span class="viewpage-preset-item-label">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['key'] = NULL;
$arguments97['id'] = NULL;
$arguments97['default'] = NULL;
$arguments97['arguments'] = NULL;
$arguments97['extensionName'] = NULL;
$arguments97['languageKey'] = NULL;
$arguments97['alternativeLanguageKeys'] = NULL;
$arguments97['key'] = 'maximized';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output87 .= '
                                    </span>
                                    <span class="viewpage-preset-item-size">
                                        100%/100%
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="t3js-preset-custom t3js-change-preset" data-key="custom" data-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['languageKey'] = NULL;
$arguments99['alternativeLanguageKeys'] = NULL;
$arguments99['key'] = 'custom';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output87 .= '" data-width="';
$array101 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array101)]);

$output87 .= '" data-height="';
$array102 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array102)]);

$output87 .= '">
                                <span class="viewpage-preset-item">
                                    <span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.expand', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output87 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output87 .= '</span>
                                    <span class="viewpage-preset-item-label t3js-preset-custom-label">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['languageKey'] = NULL;
$arguments106['alternativeLanguageKeys'] = NULL;
$arguments106['key'] = 'custom';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output87 .= '
                                    </span>
                                    <span class="viewpage-preset-item-size">
                                        <span class="t3js-preset-custom-width">';
$array108 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.width', $array108)]);

$output87 .= '</span>px/<span class="t3js-preset-custom-height">';
$array109 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('custom.height', $array109)]);

$output87 .= '</span>px
                                    </span>
                                </span>
                            </a>
                        </li>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                                <li role="separator" class="divider"></li>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
                                    <li>
                                        <a href="#" class="t3js-change-preset" data-key="';
$array124 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.key', $array124)]);

$output123 .= '" data-label="';
$array125 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array125)]);

$output123 .= '" data-width="';
$array126 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array126)]);

$output123 .= '" data-height="';
$array127 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array127)]);

$output123 .= '">
                                            <span class="viewpage-preset-item">
                                                <span class="viewpage-preset-item-icon">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('icons.{preset.type}', $array130);
};
$arguments128 = array();
$arguments128['value'] = NULL;

$output123 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output123 .= '</span>
                                                <span class="viewpage-preset-item-label">';
$array131 = array (
);
$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.label', $array131)]);

$output123 .= '</span>
                                                <span class="viewpage-preset-item-size">
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('preset.width', $array135);

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$output137 = '';
$array138 = array (
);
$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.width', $array138)]);

$output137 .= 'px';
$arguments132['then'] = $output137;
$arguments132['else'] = '100%';

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output123 .= '/';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = $renderingContext->getVariableProvider()->getByPath('preset.height', $array142);

$expression143 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$output144 = '';
$array145 = array (
);
$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('preset.height', $array145)]);

$output144 .= 'px';
$arguments139['then'] = $output144;
$arguments139['else'] = '100%';

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output123 .= '
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                ';
return $output123;
};
$arguments120 = array();
$arguments120['each'] = NULL;
$arguments120['as'] = NULL;
$arguments120['key'] = NULL;
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$array122 = array (
);$arguments120['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array122);
$arguments120['as'] = 'preset';

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
                            ';
return $output119;
};
$arguments114 = array();
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$arguments114['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('presetGroup', $array117);

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments114['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments114['__thenClosure'] = $renderChildrenClosure115;

$output113 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                        ';
return $output113;
};
$arguments110 = array();
$arguments110['each'] = NULL;
$arguments110['as'] = NULL;
$arguments110['key'] = NULL;
$arguments110['reverse'] = false;
$arguments110['iteration'] = NULL;
$array112 = array (
);$arguments110['each'] = $renderingContext->getVariableProvider()->getByPath('presetGroups', $array112);
$arguments110['as'] = 'presetGroup';
$arguments110['iteration'] = 'presetGroupIteration';

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output87 .= '
                    </ul>
                </span>
                </div>
                <div class="viewpage-topbar-size">
                    <input class="t3js-viewpage-input-width" type="number" name="width" min="300" max="9999" value="';
$array146 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array146)]);

$output87 .= '">
                    x
                    <input class="t3js-viewpage-input-height" type="number" name="height" min="300" max="9999" value="';
$array147 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array147)]);

$output87 .= '">
                </div>
            </div>
            <div class="viewpage-resizeable t3js-viewpage-resizeable" style="width:';
$array148 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.width', $array148)]);

$output87 .= 'px;height:';
$array149 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('current.height', $array149)]);

$output87 .= 'px;">
                <iframe src="';
$array150 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array150)]);

$output87 .= '" width="100%" height="100%" id="tx_viewpage_iframe" frameborder="0" border="0" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'LLL:EXT:viewpage/Resources/Private/Language/locallang.xlf:iframe.title';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output87 .= '"></iframe>
            </div>
        </div>
    ';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output79 .= '
';
return $output79;
};
$arguments77 = array();
$arguments77['name'] = NULL;
$arguments77['name'] = 'Content';

$output74 .= NULL;

$output74 .= '
';

return $output74;
}


}
#