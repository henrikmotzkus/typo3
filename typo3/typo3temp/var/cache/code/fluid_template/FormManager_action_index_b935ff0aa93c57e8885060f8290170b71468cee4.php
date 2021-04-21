<?php

class FormManager_action_index_b935ff0aa93c57e8885060f8290170b71468cee4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'FormManager';
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
 * section MainContent
 */
public function section_186817d730a4234a5cb5db37d7099a3440fc5dea(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <script>
        require([\'';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array1)]);

$output0 .= '\', \'';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array2)]);

$output0 .= '\'], function (formManagerApp, viewModel) {
            var FORMMANAGER_APP = formManagerApp.getInstance(
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= ',
                viewModel
            ).run();
        });
    </script>
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
            <div class="panel panel-space panel-default recordlist">
                <div class="panel-heading">
                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['key'] = NULL;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$arguments295['languageKey'] = NULL;
$arguments295['alternativeLanguageKeys'] = NULL;
$arguments295['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output294 .= '</span>
                </div>
                <div class="collapse in">
                    <div class="table-fit">
                        <table id="forms" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$arguments297['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output294 .= '" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['identifier'] = NULL;
$arguments299['size'] = 'small';
$arguments299['overlay'] = NULL;
$arguments299['state'] = 'default';
$arguments299['alternativeMarkupIdentifier'] = NULL;
$arguments299['identifier'] = 'actions-add';

$output294 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output294 .= '</a></th>
                                    <th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['key'] = NULL;
$arguments301['id'] = NULL;
$arguments301['default'] = NULL;
$arguments301['arguments'] = NULL;
$arguments301['extensionName'] = NULL;
$arguments301['languageKey'] = NULL;
$arguments301['alternativeLanguageKeys'] = NULL;
$arguments301['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output294 .= '</th>
                                    <th class="col-control nowrap"></th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['key'] = NULL;
$arguments303['id'] = NULL;
$arguments303['default'] = NULL;
$arguments303['arguments'] = NULL;
$arguments303['extensionName'] = NULL;
$arguments303['languageKey'] = NULL;
$arguments303['alternativeLanguageKeys'] = NULL;
$arguments303['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output294 .= '</th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['key'] = NULL;
$arguments305['id'] = NULL;
$arguments305['default'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['languageKey'] = NULL;
$arguments305['alternativeLanguageKeys'] = NULL;
$arguments305['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext)]);

$output294 .= '</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
                                <tr>
                                    <td class="col-icon nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['key'] = NULL;
$arguments338['id'] = NULL;
$arguments338['default'] = NULL;
$arguments338['arguments'] = NULL;
$arguments338['extensionName'] = NULL;
$arguments338['languageKey'] = NULL;
$arguments338['alternativeLanguageKeys'] = NULL;
$arguments338['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext)]);

$output337 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments340 = array();
$arguments340['identifier'] = NULL;
$arguments340['size'] = 'small';
$arguments340['overlay'] = NULL;
$arguments340['state'] = 'default';
$arguments340['alternativeMarkupIdentifier'] = NULL;
$arguments340['identifier'] = 'overlay-missing';

$output337 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output337 .= '
                                                </span>
                                            ';
return $output337;
};
$arguments335 = array();

$output334 .= '';

$output334 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$output347 = '';

$output347 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['key'] = NULL;
$arguments348['id'] = NULL;
$arguments348['default'] = NULL;
$arguments348['arguments'] = NULL;
$arguments348['extensionName'] = NULL;
$arguments348['languageKey'] = NULL;
$arguments348['alternativeLanguageKeys'] = NULL;
$arguments348['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext)]);

$output347 .= ' ';
$array350 = array (
);
$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array350)]);

$output347 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['identifier'] = NULL;
$arguments351['size'] = 'small';
$arguments351['overlay'] = NULL;
$arguments351['state'] = 'default';
$arguments351['alternativeMarkupIdentifier'] = NULL;
$arguments351['identifier'] = 'overlay-missing';

$output347 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output347 .= '
                                                </span>
                                            ';
return $output347;
};
$arguments342 = array();
$arguments342['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array345);

$expression346 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments342['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression346(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array344)
					),
					$renderingContext
				);

$output334 .= '';

$output334 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
                                                <span title="id=';
$array356 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array356)]);

$output355 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['identifier'] = NULL;
$arguments357['size'] = 'small';
$arguments357['overlay'] = NULL;
$arguments357['state'] = 'default';
$arguments357['alternativeMarkupIdentifier'] = NULL;
$arguments357['identifier'] = 'content-form';

$output355 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output355 .= '
                                                </span>
                                            ';
return $output355;
};
$arguments353 = array();
$arguments353['if'] = NULL;

$output334 .= '';

$output334 .= '
                                        ';
return $output334;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array331 = array();
$array332 = array (
);$array331['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array332);

$expression333 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression333(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array331)
					),
					$renderingContext
				);
$arguments311['__thenClosure'] = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['key'] = NULL;
$arguments314['id'] = NULL;
$arguments314['default'] = NULL;
$arguments314['arguments'] = NULL;
$arguments314['extensionName'] = NULL;
$arguments314['languageKey'] = NULL;
$arguments314['alternativeLanguageKeys'] = NULL;
$arguments314['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output313 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['identifier'] = NULL;
$arguments316['size'] = 'small';
$arguments316['overlay'] = NULL;
$arguments316['state'] = 'default';
$arguments316['alternativeMarkupIdentifier'] = NULL;
$arguments316['identifier'] = 'overlay-missing';

$output313 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output313 .= '
                                                </span>
                                            ';
return $output313;
};
$arguments311['__elseClosures'][] = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['key'] = NULL;
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$arguments319['languageKey'] = NULL;
$arguments319['alternativeLanguageKeys'] = NULL;
$arguments319['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output318 .= ' ';
$array321 = array (
);
$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array321)]);

$output318 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['identifier'] = NULL;
$arguments322['size'] = 'small';
$arguments322['overlay'] = NULL;
$arguments322['state'] = 'default';
$arguments322['alternativeMarkupIdentifier'] = NULL;
$arguments322['identifier'] = 'overlay-missing';

$output318 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output318 .= '
                                                </span>
                                            ';
return $output318;
};
$arguments311['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array324 = array();
$array325 = array (
);$array324['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array325);

$expression326 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression326(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array324)
					),
					$renderingContext
				);
};
$arguments311['__elseClosures'][] = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
                                                <span title="id=';
$array328 = array (
);
$output327 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array328)]);

$output327 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['identifier'] = NULL;
$arguments329['size'] = 'small';
$arguments329['overlay'] = NULL;
$arguments329['state'] = 'default';
$arguments329['alternativeMarkupIdentifier'] = NULL;
$arguments329['identifier'] = 'content-form';

$output327 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output327 .= '
                                                </span>
                                            ';
return $output327;
};

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '
                                    </td>
                                    <td class="col-title col-responsive nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output377 = '';

$output377 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
                                                    <div title="';
$array381 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array381)]);

$output380 .= '">';
$array382 = array (
);
$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array382)]);

$output380 .= '</div>
                                                ';
return $output380;
};
$arguments378 = array();

$output377 .= '';

$output377 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output385 = '';

$output385 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
$array393 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array393)]);
};
$arguments386 = array();
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['name'] = NULL;
$arguments386['rel'] = NULL;
$arguments386['rev'] = NULL;
$arguments386['target'] = NULL;
$arguments386['action'] = NULL;
$arguments386['controller'] = NULL;
$arguments386['extensionName'] = NULL;
$arguments386['pluginName'] = NULL;
$arguments386['pageUid'] = NULL;
$arguments386['pageType'] = NULL;
$arguments386['noCache'] = NULL;
$arguments386['noCacheHash'] = NULL;
$arguments386['section'] = NULL;
$arguments386['format'] = NULL;
$arguments386['linkAccessRestrictedPages'] = NULL;
$arguments386['additionalParams'] = NULL;
$arguments386['absolute'] = NULL;
$arguments386['addQueryString'] = NULL;
$arguments386['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments386['addQueryStringMethod'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['controller'] = 'FormEditor';
$arguments386['action'] = 'index';
// Rendering Array
$array388 = array();
$array389 = array (
);$array388['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array389);
$arguments386['arguments'] = $array388;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments386['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);
// Rendering Array
$array392 = array();
$array392['toggle'] = 'tooltip';
$array392['placement'] = 'right';
$arguments386['data'] = $array392;

$output385 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output385 .= '
                                                ';
return $output385;
};
$arguments383 = array();
$arguments383['if'] = NULL;

$output377 .= '';

$output377 .= '
                                        ';
return $output377;
};
$arguments359 = array();
$arguments359['then'] = NULL;
$arguments359['else'] = NULL;
$arguments359['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array373 = array();
$array374 = array (
);$array373['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array374);
$array373['1'] = ' || ';
$array375 = array (
);$array373['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array375);

$expression376 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments359['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression376(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)
					),
					$renderingContext
				);
$arguments359['__thenClosure'] = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                                                    <div title="';
$array362 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array362)]);

$output361 .= '">';
$array363 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array363)]);

$output361 .= '</div>
                                                ';
return $output361;
};
$arguments359['__elseClosures'][] = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$array372 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array372)]);
};
$arguments365 = array();
$arguments365['additionalAttributes'] = NULL;
$arguments365['data'] = NULL;
$arguments365['class'] = NULL;
$arguments365['dir'] = NULL;
$arguments365['id'] = NULL;
$arguments365['lang'] = NULL;
$arguments365['style'] = NULL;
$arguments365['title'] = NULL;
$arguments365['accesskey'] = NULL;
$arguments365['tabindex'] = NULL;
$arguments365['onclick'] = NULL;
$arguments365['name'] = NULL;
$arguments365['rel'] = NULL;
$arguments365['rev'] = NULL;
$arguments365['target'] = NULL;
$arguments365['action'] = NULL;
$arguments365['controller'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['pluginName'] = NULL;
$arguments365['pageUid'] = NULL;
$arguments365['pageType'] = NULL;
$arguments365['noCache'] = NULL;
$arguments365['noCacheHash'] = NULL;
$arguments365['section'] = NULL;
$arguments365['format'] = NULL;
$arguments365['linkAccessRestrictedPages'] = NULL;
$arguments365['additionalParams'] = NULL;
$arguments365['absolute'] = NULL;
$arguments365['addQueryString'] = NULL;
$arguments365['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments365['addQueryStringMethod'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['controller'] = 'FormEditor';
$arguments365['action'] = 'index';
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array368);
$arguments365['arguments'] = $array367;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['key'] = NULL;
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$arguments369['languageKey'] = NULL;
$arguments369['alternativeLanguageKeys'] = NULL;
$arguments369['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments365['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);
// Rendering Array
$array371 = array();
$array371['toggle'] = 'tooltip';
$array371['placement'] = 'right';
$arguments365['data'] = $array371;

$output364 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '
                                                ';
return $output364;
};

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output310 .= '
                                    </td>
                                    <td class="col-control nowrap">
                                        <div class="btn-group" role="group">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['key'] = NULL;
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$arguments418['languageKey'] = NULL;
$arguments418['alternativeLanguageKeys'] = NULL;
$arguments418['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output417 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['identifier'] = NULL;
$arguments420['size'] = 'small';
$arguments420['overlay'] = NULL;
$arguments420['state'] = 'default';
$arguments420['alternativeMarkupIdentifier'] = NULL;
$arguments420['identifier'] = 'actions-open';

$output417 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output417 .= '</button>
                                                ';
return $output417;
};
$arguments415 = array();

$output414 .= '';

$output414 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['identifier'] = NULL;
$arguments431['size'] = 'small';
$arguments431['overlay'] = NULL;
$arguments431['state'] = 'default';
$arguments431['alternativeMarkupIdentifier'] = NULL;
$arguments431['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);
};
$arguments425 = array();
$arguments425['additionalAttributes'] = NULL;
$arguments425['data'] = NULL;
$arguments425['class'] = NULL;
$arguments425['dir'] = NULL;
$arguments425['id'] = NULL;
$arguments425['lang'] = NULL;
$arguments425['style'] = NULL;
$arguments425['title'] = NULL;
$arguments425['accesskey'] = NULL;
$arguments425['tabindex'] = NULL;
$arguments425['onclick'] = NULL;
$arguments425['name'] = NULL;
$arguments425['rel'] = NULL;
$arguments425['rev'] = NULL;
$arguments425['target'] = NULL;
$arguments425['action'] = NULL;
$arguments425['controller'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['pluginName'] = NULL;
$arguments425['pageUid'] = NULL;
$arguments425['pageType'] = NULL;
$arguments425['noCache'] = NULL;
$arguments425['noCacheHash'] = NULL;
$arguments425['section'] = NULL;
$arguments425['format'] = NULL;
$arguments425['linkAccessRestrictedPages'] = NULL;
$arguments425['additionalParams'] = NULL;
$arguments425['absolute'] = NULL;
$arguments425['addQueryString'] = NULL;
$arguments425['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments425['addQueryStringMethod'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['controller'] = 'FormEditor';
$arguments425['action'] = 'index';
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array428);
$arguments425['arguments'] = $array427;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['key'] = NULL;
$arguments429['id'] = NULL;
$arguments429['default'] = NULL;
$arguments429['arguments'] = NULL;
$arguments429['extensionName'] = NULL;
$arguments429['languageKey'] = NULL;
$arguments429['alternativeLanguageKeys'] = NULL;
$arguments429['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments425['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);
$arguments425['class'] = 'btn btn-default form-record-open';

$output424 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output424 .= '
                                                ';
return $output424;
};
$arguments422 = array();
$arguments422['if'] = NULL;

$output414 .= '';

$output414 .= '
                                            ';
return $output414;
};
$arguments394 = array();
$arguments394['then'] = NULL;
$arguments394['else'] = NULL;
$arguments394['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array410 = array();
$array411 = array (
);$array410['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array411);
$array410['1'] = ' || ';
$array412 = array (
);$array410['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array412);

$expression413 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments394['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression413(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array410)
					),
					$renderingContext
				);
$arguments394['__thenClosure'] = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['key'] = NULL;
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$arguments397['languageKey'] = NULL;
$arguments397['alternativeLanguageKeys'] = NULL;
$arguments397['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output396 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext)]);

$output396 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['identifier'] = NULL;
$arguments399['size'] = 'small';
$arguments399['overlay'] = NULL;
$arguments399['state'] = 'default';
$arguments399['alternativeMarkupIdentifier'] = NULL;
$arguments399['identifier'] = 'actions-open';

$output396 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output396 .= '</button>
                                                ';
return $output396;
};
$arguments394['__elseClosures'][] = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['identifier'] = NULL;
$arguments408['size'] = 'small';
$arguments408['overlay'] = NULL;
$arguments408['state'] = 'default';
$arguments408['alternativeMarkupIdentifier'] = NULL;
$arguments408['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);
};
$arguments402 = array();
$arguments402['additionalAttributes'] = NULL;
$arguments402['data'] = NULL;
$arguments402['class'] = NULL;
$arguments402['dir'] = NULL;
$arguments402['id'] = NULL;
$arguments402['lang'] = NULL;
$arguments402['style'] = NULL;
$arguments402['title'] = NULL;
$arguments402['accesskey'] = NULL;
$arguments402['tabindex'] = NULL;
$arguments402['onclick'] = NULL;
$arguments402['name'] = NULL;
$arguments402['rel'] = NULL;
$arguments402['rev'] = NULL;
$arguments402['target'] = NULL;
$arguments402['action'] = NULL;
$arguments402['controller'] = NULL;
$arguments402['extensionName'] = NULL;
$arguments402['pluginName'] = NULL;
$arguments402['pageUid'] = NULL;
$arguments402['pageType'] = NULL;
$arguments402['noCache'] = NULL;
$arguments402['noCacheHash'] = NULL;
$arguments402['section'] = NULL;
$arguments402['format'] = NULL;
$arguments402['linkAccessRestrictedPages'] = NULL;
$arguments402['additionalParams'] = NULL;
$arguments402['absolute'] = NULL;
$arguments402['addQueryString'] = NULL;
$arguments402['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments402['addQueryStringMethod'] = NULL;
$arguments402['arguments'] = NULL;
$arguments402['controller'] = 'FormEditor';
$arguments402['action'] = 'index';
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array405);
$arguments402['arguments'] = $array404;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['key'] = NULL;
$arguments406['id'] = NULL;
$arguments406['default'] = NULL;
$arguments406['arguments'] = NULL;
$arguments406['extensionName'] = NULL;
$arguments406['languageKey'] = NULL;
$arguments406['alternativeLanguageKeys'] = NULL;
$arguments406['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments402['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);
$arguments402['class'] = 'btn btn-default form-record-open';

$output401 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
                                                ';
return $output401;
};

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output310 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output486 = '';

$output486 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['key'] = NULL;
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['languageKey'] = NULL;
$arguments490['alternativeLanguageKeys'] = NULL;
$arguments490['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output489 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext)]);

$output489 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['identifier'] = NULL;
$arguments492['size'] = 'small';
$arguments492['overlay'] = NULL;
$arguments492['state'] = 'default';
$arguments492['alternativeMarkupIdentifier'] = NULL;
$arguments492['identifier'] = 'actions-duplicate';

$output489 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output489 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments494 = array();
$arguments494['key'] = NULL;
$arguments494['id'] = NULL;
$arguments494['default'] = NULL;
$arguments494['arguments'] = NULL;
$arguments494['extensionName'] = NULL;
$arguments494['languageKey'] = NULL;
$arguments494['alternativeLanguageKeys'] = NULL;
$arguments494['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output489 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext)]);

$output489 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['identifier'] = NULL;
$arguments496['size'] = 'small';
$arguments496['overlay'] = NULL;
$arguments496['state'] = 'default';
$arguments496['alternativeMarkupIdentifier'] = NULL;
$arguments496['identifier'] = 'actions-edit-delete';

$output489 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output489 .= '</button>
                                                ';
return $output489;
};
$arguments487 = array();

$output486 .= '';

$output486 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array501 = array (
);
$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array501)]);

$output500 .= '" data-form-name="';
$array502 = array (
);
$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array502)]);

$output500 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['key'] = NULL;
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['languageKey'] = NULL;
$arguments503['alternativeLanguageKeys'] = NULL;
$arguments503['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output500 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext)]);

$output500 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['identifier'] = NULL;
$arguments505['size'] = 'small';
$arguments505['overlay'] = NULL;
$arguments505['state'] = 'default';
$arguments505['alternativeMarkupIdentifier'] = NULL;
$arguments505['identifier'] = 'actions-duplicate';

$output500 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output500 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
$output526 = '';

$output526 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array527 = array (
);
$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array527)]);

$output526 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['key'] = NULL;
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$arguments528['languageKey'] = NULL;
$arguments528['alternativeLanguageKeys'] = NULL;
$arguments528['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output526 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext)]);

$output526 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['identifier'] = NULL;
$arguments530['size'] = 'small';
$arguments530['overlay'] = NULL;
$arguments530['state'] = 'default';
$arguments530['alternativeMarkupIdentifier'] = NULL;
$arguments530['identifier'] = 'actions-edit-delete';

$output526 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output526 .= '</a>
                                                        ';
return $output526;
};
$arguments524 = array();

$output523 .= '';

$output523 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output534 = '';

$output534 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments535 = array();
$arguments535['key'] = NULL;
$arguments535['id'] = NULL;
$arguments535['default'] = NULL;
$arguments535['arguments'] = NULL;
$arguments535['extensionName'] = NULL;
$arguments535['languageKey'] = NULL;
$arguments535['alternativeLanguageKeys'] = NULL;
$arguments535['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output534 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext)]);

$output534 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['identifier'] = NULL;
$arguments537['size'] = 'small';
$arguments537['overlay'] = NULL;
$arguments537['state'] = 'default';
$arguments537['alternativeMarkupIdentifier'] = NULL;
$arguments537['identifier'] = 'actions-edit-delete';

$output534 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);

$output534 .= '</button>
                                                        ';
return $output534;
};
$arguments532 = array();
$arguments532['if'] = NULL;

$output523 .= '';

$output523 .= '
                                                    ';
return $output523;
};
$arguments507 = array();
$arguments507['then'] = NULL;
$arguments507['else'] = NULL;
$arguments507['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array520 = array();
$array521 = array (
);$array520['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array521);

$expression522 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments507['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression522(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array520)
					),
					$renderingContext
				);
$arguments507['__thenClosure'] = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array510 = array (
);
$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array510)]);

$output509 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['key'] = NULL;
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$arguments511['languageKey'] = NULL;
$arguments511['alternativeLanguageKeys'] = NULL;
$arguments511['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext)]);

$output509 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['identifier'] = NULL;
$arguments513['size'] = 'small';
$arguments513['overlay'] = NULL;
$arguments513['state'] = 'default';
$arguments513['alternativeMarkupIdentifier'] = NULL;
$arguments513['identifier'] = 'actions-edit-delete';

$output509 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output509 .= '</a>
                                                        ';
return $output509;
};
$arguments507['__elseClosures'][] = function() use ($renderingContext, $self) {
$output515 = '';

$output515 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments516 = array();
$arguments516['key'] = NULL;
$arguments516['id'] = NULL;
$arguments516['default'] = NULL;
$arguments516['arguments'] = NULL;
$arguments516['extensionName'] = NULL;
$arguments516['languageKey'] = NULL;
$arguments516['alternativeLanguageKeys'] = NULL;
$arguments516['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output515 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext)]);

$output515 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['identifier'] = NULL;
$arguments518['size'] = 'small';
$arguments518['overlay'] = NULL;
$arguments518['state'] = 'default';
$arguments518['alternativeMarkupIdentifier'] = NULL;
$arguments518['identifier'] = 'actions-edit-delete';

$output515 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext);

$output515 .= '</button>
                                                        ';
return $output515;
};

$output500 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output500 .= '
                                                ';
return $output500;
};
$arguments498 = array();
$arguments498['if'] = NULL;

$output486 .= '';

$output486 .= '
                                            ';
return $output486;
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array483 = array();
$array484 = array (
);$array483['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array484);

$expression485 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array483)
					),
					$renderingContext
				);
$arguments433['__thenClosure'] = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['key'] = NULL;
$arguments436['id'] = NULL;
$arguments436['default'] = NULL;
$arguments436['arguments'] = NULL;
$arguments436['extensionName'] = NULL;
$arguments436['languageKey'] = NULL;
$arguments436['alternativeLanguageKeys'] = NULL;
$arguments436['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext)]);

$output435 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['identifier'] = NULL;
$arguments438['size'] = 'small';
$arguments438['overlay'] = NULL;
$arguments438['state'] = 'default';
$arguments438['alternativeMarkupIdentifier'] = NULL;
$arguments438['identifier'] = 'actions-duplicate';

$output435 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output435 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);

$output435 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments442 = array();
$arguments442['identifier'] = NULL;
$arguments442['size'] = 'small';
$arguments442['overlay'] = NULL;
$arguments442['state'] = 'default';
$arguments442['alternativeMarkupIdentifier'] = NULL;
$arguments442['identifier'] = 'actions-edit-delete';

$output435 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output435 .= '</button>
                                                ';
return $output435;
};
$arguments433['__elseClosures'][] = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array445 = array (
);
$output444 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array445)]);

$output444 .= '" data-form-name="';
$array446 = array (
);
$output444 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array446)]);

$output444 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['key'] = NULL;
$arguments447['id'] = NULL;
$arguments447['default'] = NULL;
$arguments447['arguments'] = NULL;
$arguments447['extensionName'] = NULL;
$arguments447['languageKey'] = NULL;
$arguments447['alternativeLanguageKeys'] = NULL;
$arguments447['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output444 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext)]);

$output444 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments449 = array();
$arguments449['identifier'] = NULL;
$arguments449['size'] = 'small';
$arguments449['overlay'] = NULL;
$arguments449['state'] = 'default';
$arguments449['alternativeMarkupIdentifier'] = NULL;
$arguments449['identifier'] = 'actions-duplicate';

$output444 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output444 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$output470 = '';

$output470 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array471 = array (
);
$output470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array471)]);

$output470 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['key'] = NULL;
$arguments472['id'] = NULL;
$arguments472['default'] = NULL;
$arguments472['arguments'] = NULL;
$arguments472['extensionName'] = NULL;
$arguments472['languageKey'] = NULL;
$arguments472['alternativeLanguageKeys'] = NULL;
$arguments472['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output470 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext)]);

$output470 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['identifier'] = NULL;
$arguments474['size'] = 'small';
$arguments474['overlay'] = NULL;
$arguments474['state'] = 'default';
$arguments474['alternativeMarkupIdentifier'] = NULL;
$arguments474['identifier'] = 'actions-edit-delete';

$output470 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output470 .= '</a>
                                                        ';
return $output470;
};
$arguments468 = array();

$output467 .= '';

$output467 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments479 = array();
$arguments479['key'] = NULL;
$arguments479['id'] = NULL;
$arguments479['default'] = NULL;
$arguments479['arguments'] = NULL;
$arguments479['extensionName'] = NULL;
$arguments479['languageKey'] = NULL;
$arguments479['alternativeLanguageKeys'] = NULL;
$arguments479['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output478 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext)]);

$output478 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['identifier'] = NULL;
$arguments481['size'] = 'small';
$arguments481['overlay'] = NULL;
$arguments481['state'] = 'default';
$arguments481['alternativeMarkupIdentifier'] = NULL;
$arguments481['identifier'] = 'actions-edit-delete';

$output478 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output478 .= '</button>
                                                        ';
return $output478;
};
$arguments476 = array();
$arguments476['if'] = NULL;

$output467 .= '';

$output467 .= '
                                                    ';
return $output467;
};
$arguments451 = array();
$arguments451['then'] = NULL;
$arguments451['else'] = NULL;
$arguments451['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array464 = array();
$array465 = array (
);$array464['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array465);

$expression466 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments451['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression466(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array464)
					),
					$renderingContext
				);
$arguments451['__thenClosure'] = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array454 = array (
);
$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array454)]);

$output453 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['key'] = NULL;
$arguments455['id'] = NULL;
$arguments455['default'] = NULL;
$arguments455['arguments'] = NULL;
$arguments455['extensionName'] = NULL;
$arguments455['languageKey'] = NULL;
$arguments455['alternativeLanguageKeys'] = NULL;
$arguments455['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext)]);

$output453 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['identifier'] = NULL;
$arguments457['size'] = 'small';
$arguments457['overlay'] = NULL;
$arguments457['state'] = 'default';
$arguments457['alternativeMarkupIdentifier'] = NULL;
$arguments457['identifier'] = 'actions-edit-delete';

$output453 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output453 .= '</a>
                                                        ';
return $output453;
};
$arguments451['__elseClosures'][] = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['languageKey'] = NULL;
$arguments460['alternativeLanguageKeys'] = NULL;
$arguments460['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output459 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output459 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['identifier'] = NULL;
$arguments462['size'] = 'small';
$arguments462['overlay'] = NULL;
$arguments462['state'] = 'default';
$arguments462['alternativeMarkupIdentifier'] = NULL;
$arguments462['identifier'] = 'actions-edit-delete';

$output459 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output459 .= '</button>
                                                        ';
return $output459;
};

$output444 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output444 .= '
                                                ';
return $output444;
};

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output310 .= '
                                        </div>
                                    </td>
                                    <td class="nowrap">';
$array539 = array (
);
$output310 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array539)]);

$output310 .= '</td>
                                    <td class="nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array555 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array555)]);

$output554 .= '" data-form-name="';
$array556 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array556)]);

$output554 .= '">';
$array557 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array557)]);

$output554 .= '</a>
                                            ';
return $output554;
};
$arguments552 = array();

$output551 .= '';

$output551 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$output560 = '';

$output560 .= '
                                                ';
$array561 = array (
);
$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array561)]);

$output560 .= '
                                            ';
return $output560;
};
$arguments558 = array();
$arguments558['if'] = NULL;

$output551 .= '';

$output551 .= '
                                        ';
return $output551;
};
$arguments540 = array();
$arguments540['then'] = NULL;
$arguments540['else'] = NULL;
$arguments540['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array548 = array();
$array549 = array (
);$array548['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array549);

$expression550 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments540['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression550(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array548)
					),
					$renderingContext
				);
$arguments540['__thenClosure'] = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array543 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array543)]);

$output542 .= '" data-form-name="';
$array544 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array544)]);

$output542 .= '">';
$array545 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array545)]);

$output542 .= '</a>
                                            ';
return $output542;
};
$arguments540['__elseClosures'][] = function() use ($renderingContext, $self) {
$output546 = '';

$output546 .= '
                                                ';
$array547 = array (
);
$output546 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array547)]);

$output546 .= '
                                            ';
return $output546;
};

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output310 .= '
                                    </td>
                                </tr>
                            ';
return $output310;
};
$arguments307 = array();
$arguments307['each'] = NULL;
$arguments307['as'] = NULL;
$arguments307['key'] = NULL;
$arguments307['reverse'] = false;
$arguments307['iteration'] = NULL;
$array309 = array (
);$arguments307['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array309);
$arguments307['as'] = 'form';

$output294 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output294 .= '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ';
return $output294;
};
$arguments292 = array();

$output291 .= '';

$output291 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output564 = '';

$output564 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['key'] = NULL;
$arguments570['id'] = NULL;
$arguments570['default'] = NULL;
$arguments570['arguments'] = NULL;
$arguments570['extensionName'] = NULL;
$arguments570['languageKey'] = NULL;
$arguments570['alternativeLanguageKeys'] = NULL;
$arguments570['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output569 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext)]);

$output569 .= '</p>
            <a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments572 = array();
$arguments572['key'] = NULL;
$arguments572['id'] = NULL;
$arguments572['default'] = NULL;
$arguments572['arguments'] = NULL;
$arguments572['extensionName'] = NULL;
$arguments572['languageKey'] = NULL;
$arguments572['alternativeLanguageKeys'] = NULL;
$arguments572['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output569 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext)]);

$output569 .= '</a>
        ';
return $output569;
};
$arguments565 = array();
$arguments565['message'] = NULL;
$arguments565['title'] = NULL;
$arguments565['state'] = -2;
$arguments565['iconName'] = NULL;
$arguments565['disableIcon'] = false;
$arguments565['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['key'] = NULL;
$arguments567['id'] = NULL;
$arguments567['default'] = NULL;
$arguments567['arguments'] = NULL;
$arguments567['extensionName'] = NULL;
$arguments567['languageKey'] = NULL;
$arguments567['alternativeLanguageKeys'] = NULL;
$arguments567['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments565['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);
$renderChildrenClosure566 = ($arguments565['message'] !== null) ? function() use ($arguments565) { return $arguments565['message']; } : $renderChildrenClosure566;
$output564 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output564 .= '
    ';
return $output564;
};
$arguments562 = array();
$arguments562['if'] = NULL;

$output291 .= '';

$output291 .= '
';
return $output291;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
            <div class="panel panel-space panel-default recordlist">
                <div class="panel-heading">
                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</span>
                </div>
                <div class="collapse in">
                    <div class="table-fit">
                        <table id="forms" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" title="';
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
$arguments13['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output10 .= '" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['identifier'] = NULL;
$arguments15['size'] = 'small';
$arguments15['overlay'] = NULL;
$arguments15['state'] = 'default';
$arguments15['alternativeMarkupIdentifier'] = NULL;
$arguments15['identifier'] = 'actions-add';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output10 .= '</a></th>
                                    <th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output10 .= '</th>
                                    <th class="col-control nowrap"></th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output10 .= '</th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output10 .= '</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                                <tr>
                                    <td class="col-icon nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['identifier'] = NULL;
$arguments56['size'] = 'small';
$arguments56['overlay'] = NULL;
$arguments56['state'] = 'default';
$arguments56['alternativeMarkupIdentifier'] = NULL;
$arguments56['identifier'] = 'overlay-missing';

$output53 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output53 .= '
                                                </span>
                                            ';
return $output53;
};
$arguments51 = array();

$output50 .= '';

$output50 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= ' ';
$array66 = array (
);
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array66)]);

$output63 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['identifier'] = NULL;
$arguments67['size'] = 'small';
$arguments67['overlay'] = NULL;
$arguments67['state'] = 'default';
$arguments67['alternativeMarkupIdentifier'] = NULL;
$arguments67['identifier'] = 'overlay-missing';

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output63 .= '
                                                </span>
                                            ';
return $output63;
};
$arguments58 = array();
$arguments58['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);

$output50 .= '';

$output50 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                                                <span title="id=';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array72)]);

$output71 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['identifier'] = NULL;
$arguments73['size'] = 'small';
$arguments73['overlay'] = NULL;
$arguments73['state'] = 'default';
$arguments73['alternativeMarkupIdentifier'] = NULL;
$arguments73['identifier'] = 'content-form';

$output71 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output71 .= '
                                                </span>
                                            ';
return $output71;
};
$arguments69 = array();
$arguments69['if'] = NULL;

$output50 .= '';

$output50 .= '
                                        ';
return $output50;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output29 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['identifier'] = NULL;
$arguments32['size'] = 'small';
$arguments32['overlay'] = NULL;
$arguments32['state'] = 'default';
$arguments32['alternativeMarkupIdentifier'] = NULL;
$arguments32['identifier'] = 'overlay-missing';

$output29 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output29 .= '
                                                </span>
                                            ';
return $output29;
};
$arguments27['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$arguments35['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= ' ';
$array37 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array37)]);

$output34 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['identifier'] = NULL;
$arguments38['size'] = 'small';
$arguments38['overlay'] = NULL;
$arguments38['state'] = 'default';
$arguments38['alternativeMarkupIdentifier'] = NULL;
$arguments38['identifier'] = 'overlay-missing';

$output34 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output34 .= '
                                                </span>
                                            ';
return $output34;
};
$arguments27['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
};
$arguments27['__elseClosures'][] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                                                <span title="id=';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array44)]);

$output43 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['identifier'] = NULL;
$arguments45['size'] = 'small';
$arguments45['overlay'] = NULL;
$arguments45['state'] = 'default';
$arguments45['alternativeMarkupIdentifier'] = NULL;
$arguments45['identifier'] = 'content-form';

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output43 .= '
                                                </span>
                                            ';
return $output43;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                                    </td>
                                    <td class="col-title col-responsive nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                                                    <div title="';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array97)]);

$output96 .= '">';
$array98 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array98)]);

$output96 .= '</div>
                                                ';
return $output96;
};
$arguments94 = array();

$output93 .= '';

$output93 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$array109 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array109)]);
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['name'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['rev'] = NULL;
$arguments102['target'] = NULL;
$arguments102['action'] = NULL;
$arguments102['controller'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['pluginName'] = NULL;
$arguments102['pageUid'] = NULL;
$arguments102['pageType'] = NULL;
$arguments102['noCache'] = NULL;
$arguments102['noCacheHash'] = NULL;
$arguments102['section'] = NULL;
$arguments102['format'] = NULL;
$arguments102['linkAccessRestrictedPages'] = NULL;
$arguments102['additionalParams'] = NULL;
$arguments102['absolute'] = NULL;
$arguments102['addQueryString'] = NULL;
$arguments102['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments102['addQueryStringMethod'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['controller'] = 'FormEditor';
$arguments102['action'] = 'index';
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array105);
$arguments102['arguments'] = $array104;
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
$arguments106['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments102['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
// Rendering Array
$array108 = array();
$array108['toggle'] = 'tooltip';
$array108['placement'] = 'right';
$arguments102['data'] = $array108;

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
                                                ';
return $output101;
};
$arguments99 = array();
$arguments99['if'] = NULL;

$output93 .= '';

$output93 .= '
                                        ';
return $output93;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array90);
$array89['1'] = ' || ';
$array91 = array (
);$array89['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array91);

$expression92 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                                    <div title="';
$array78 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array78)]);

$output77 .= '">';
$array79 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array79)]);

$output77 .= '</div>
                                                ';
return $output77;
};
$arguments75['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array88 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array88)]);
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['name'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['rev'] = NULL;
$arguments81['target'] = NULL;
$arguments81['action'] = NULL;
$arguments81['controller'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['pluginName'] = NULL;
$arguments81['pageUid'] = NULL;
$arguments81['pageType'] = NULL;
$arguments81['noCache'] = NULL;
$arguments81['noCacheHash'] = NULL;
$arguments81['section'] = NULL;
$arguments81['format'] = NULL;
$arguments81['linkAccessRestrictedPages'] = NULL;
$arguments81['additionalParams'] = NULL;
$arguments81['absolute'] = NULL;
$arguments81['addQueryString'] = NULL;
$arguments81['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments81['addQueryStringMethod'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['controller'] = 'FormEditor';
$arguments81['action'] = 'index';
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array84);
$arguments81['arguments'] = $array83;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['key'] = NULL;
$arguments85['id'] = NULL;
$arguments85['default'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['languageKey'] = NULL;
$arguments85['alternativeLanguageKeys'] = NULL;
$arguments85['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments81['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
// Rendering Array
$array87 = array();
$array87['toggle'] = 'tooltip';
$array87['placement'] = 'right';
$arguments81['data'] = $array87;

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
                                                ';
return $output80;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output26 .= '
                                    </td>
                                    <td class="col-control nowrap">
                                        <div class="btn-group" role="group">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output133 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['identifier'] = NULL;
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$arguments136['identifier'] = 'actions-open';

$output133 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output133 .= '</button>
                                                ';
return $output133;
};
$arguments131 = array();

$output130 .= '';

$output130 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['identifier'] = NULL;
$arguments147['size'] = 'small';
$arguments147['overlay'] = NULL;
$arguments147['state'] = 'default';
$arguments147['alternativeMarkupIdentifier'] = NULL;
$arguments147['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$arguments141['action'] = NULL;
$arguments141['controller'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['pluginName'] = NULL;
$arguments141['pageUid'] = NULL;
$arguments141['pageType'] = NULL;
$arguments141['noCache'] = NULL;
$arguments141['noCacheHash'] = NULL;
$arguments141['section'] = NULL;
$arguments141['format'] = NULL;
$arguments141['linkAccessRestrictedPages'] = NULL;
$arguments141['additionalParams'] = NULL;
$arguments141['absolute'] = NULL;
$arguments141['addQueryString'] = NULL;
$arguments141['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments141['addQueryStringMethod'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['controller'] = 'FormEditor';
$arguments141['action'] = 'index';
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array144);
$arguments141['arguments'] = $array143;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['languageKey'] = NULL;
$arguments145['alternativeLanguageKeys'] = NULL;
$arguments145['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments141['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);
$arguments141['class'] = 'btn btn-default form-record-open';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                                                ';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output130 .= '';

$output130 .= '
                                            ';
return $output130;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array127);
$array126['1'] = ' || ';
$array128 = array (
);$array126['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array128);

$expression129 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$arguments113['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output112 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['identifier'] = NULL;
$arguments115['size'] = 'small';
$arguments115['overlay'] = NULL;
$arguments115['state'] = 'default';
$arguments115['alternativeMarkupIdentifier'] = NULL;
$arguments115['identifier'] = 'actions-open';

$output112 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output112 .= '</button>
                                                ';
return $output112;
};
$arguments110['__elseClosures'][] = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['identifier'] = NULL;
$arguments124['size'] = 'small';
$arguments124['overlay'] = NULL;
$arguments124['state'] = 'default';
$arguments124['alternativeMarkupIdentifier'] = NULL;
$arguments124['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$arguments118['action'] = NULL;
$arguments118['controller'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['pluginName'] = NULL;
$arguments118['pageUid'] = NULL;
$arguments118['pageType'] = NULL;
$arguments118['noCache'] = NULL;
$arguments118['noCacheHash'] = NULL;
$arguments118['section'] = NULL;
$arguments118['format'] = NULL;
$arguments118['linkAccessRestrictedPages'] = NULL;
$arguments118['additionalParams'] = NULL;
$arguments118['absolute'] = NULL;
$arguments118['addQueryString'] = NULL;
$arguments118['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments118['addQueryStringMethod'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['controller'] = 'FormEditor';
$arguments118['action'] = 'index';
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array121);
$arguments118['arguments'] = $array120;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['key'] = NULL;
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['languageKey'] = NULL;
$arguments122['alternativeLanguageKeys'] = NULL;
$arguments122['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments118['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);
$arguments118['class'] = 'btn btn-default form-record-open';

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                                                ';
return $output117;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output26 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['key'] = NULL;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['languageKey'] = NULL;
$arguments206['alternativeLanguageKeys'] = NULL;
$arguments206['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext)]);

$output205 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['identifier'] = NULL;
$arguments208['size'] = 'small';
$arguments208['overlay'] = NULL;
$arguments208['state'] = 'default';
$arguments208['alternativeMarkupIdentifier'] = NULL;
$arguments208['identifier'] = 'actions-duplicate';

$output205 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output205 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$arguments210['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output205 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['identifier'] = NULL;
$arguments212['size'] = 'small';
$arguments212['overlay'] = NULL;
$arguments212['state'] = 'default';
$arguments212['alternativeMarkupIdentifier'] = NULL;
$arguments212['identifier'] = 'actions-edit-delete';

$output205 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output205 .= '</button>
                                                ';
return $output205;
};
$arguments203 = array();

$output202 .= '';

$output202 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array217 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array217)]);

$output216 .= '" data-form-name="';
$array218 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array218)]);

$output216 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['languageKey'] = NULL;
$arguments219['alternativeLanguageKeys'] = NULL;
$arguments219['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output216 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['identifier'] = NULL;
$arguments221['size'] = 'small';
$arguments221['overlay'] = NULL;
$arguments221['state'] = 'default';
$arguments221['alternativeMarkupIdentifier'] = NULL;
$arguments221['identifier'] = 'actions-duplicate';

$output216 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output216 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array243 = array (
);
$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array243)]);

$output242 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['key'] = NULL;
$arguments244['id'] = NULL;
$arguments244['default'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['languageKey'] = NULL;
$arguments244['alternativeLanguageKeys'] = NULL;
$arguments244['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output242 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);

$output242 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['identifier'] = NULL;
$arguments246['size'] = 'small';
$arguments246['overlay'] = NULL;
$arguments246['state'] = 'default';
$arguments246['alternativeMarkupIdentifier'] = NULL;
$arguments246['identifier'] = 'actions-edit-delete';

$output242 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output242 .= '</a>
                                                        ';
return $output242;
};
$arguments240 = array();

$output239 .= '';

$output239 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output250 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['identifier'] = NULL;
$arguments253['size'] = 'small';
$arguments253['overlay'] = NULL;
$arguments253['state'] = 'default';
$arguments253['alternativeMarkupIdentifier'] = NULL;
$arguments253['identifier'] = 'actions-edit-delete';

$output250 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output250 .= '</button>
                                                        ';
return $output250;
};
$arguments248 = array();
$arguments248['if'] = NULL;

$output239 .= '';

$output239 .= '
                                                    ';
return $output239;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array237);

$expression238 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array226 = array (
);
$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array226)]);

$output225 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output225 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['identifier'] = NULL;
$arguments229['size'] = 'small';
$arguments229['overlay'] = NULL;
$arguments229['state'] = 'default';
$arguments229['alternativeMarkupIdentifier'] = NULL;
$arguments229['identifier'] = 'actions-edit-delete';

$output225 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output225 .= '</a>
                                                        ';
return $output225;
};
$arguments223['__elseClosures'][] = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['key'] = NULL;
$arguments232['id'] = NULL;
$arguments232['default'] = NULL;
$arguments232['arguments'] = NULL;
$arguments232['extensionName'] = NULL;
$arguments232['languageKey'] = NULL;
$arguments232['alternativeLanguageKeys'] = NULL;
$arguments232['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext)]);

$output231 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['identifier'] = NULL;
$arguments234['size'] = 'small';
$arguments234['overlay'] = NULL;
$arguments234['state'] = 'default';
$arguments234['alternativeMarkupIdentifier'] = NULL;
$arguments234['identifier'] = 'actions-edit-delete';

$output231 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output231 .= '</button>
                                                        ';
return $output231;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output216 .= '
                                                ';
return $output216;
};
$arguments214 = array();
$arguments214['if'] = NULL;

$output202 .= '';

$output202 .= '
                                            ';
return $output202;
};
$arguments149 = array();
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array200);

$expression201 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['key'] = NULL;
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$arguments152['languageKey'] = NULL;
$arguments152['alternativeLanguageKeys'] = NULL;
$arguments152['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output151 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['identifier'] = NULL;
$arguments154['size'] = 'small';
$arguments154['overlay'] = NULL;
$arguments154['state'] = 'default';
$arguments154['alternativeMarkupIdentifier'] = NULL;
$arguments154['identifier'] = 'actions-duplicate';

$output151 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output151 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$arguments156['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output151 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['identifier'] = NULL;
$arguments158['size'] = 'small';
$arguments158['overlay'] = NULL;
$arguments158['state'] = 'default';
$arguments158['alternativeMarkupIdentifier'] = NULL;
$arguments158['identifier'] = 'actions-edit-delete';

$output151 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output151 .= '</button>
                                                ';
return $output151;
};
$arguments149['__elseClosures'][] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array161)]);

$output160 .= '" data-form-name="';
$array162 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array162)]);

$output160 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output160 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['identifier'] = NULL;
$arguments165['size'] = 'small';
$arguments165['overlay'] = NULL;
$arguments165['state'] = 'default';
$arguments165['alternativeMarkupIdentifier'] = NULL;
$arguments165['identifier'] = 'actions-duplicate';

$output160 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output160 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array187 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array187)]);

$output186 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['key'] = NULL;
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['languageKey'] = NULL;
$arguments188['alternativeLanguageKeys'] = NULL;
$arguments188['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output186 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['identifier'] = NULL;
$arguments190['size'] = 'small';
$arguments190['overlay'] = NULL;
$arguments190['state'] = 'default';
$arguments190['alternativeMarkupIdentifier'] = NULL;
$arguments190['identifier'] = 'actions-edit-delete';

$output186 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output186 .= '</a>
                                                        ';
return $output186;
};
$arguments184 = array();

$output183 .= '';

$output183 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output194 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['identifier'] = NULL;
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$arguments197['identifier'] = 'actions-edit-delete';

$output194 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output194 .= '</button>
                                                        ';
return $output194;
};
$arguments192 = array();
$arguments192['if'] = NULL;

$output183 .= '';

$output183 .= '
                                                    ';
return $output183;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array170 = array (
);
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array170)]);

$output169 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['languageKey'] = NULL;
$arguments171['alternativeLanguageKeys'] = NULL;
$arguments171['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output169 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['identifier'] = NULL;
$arguments173['size'] = 'small';
$arguments173['overlay'] = NULL;
$arguments173['state'] = 'default';
$arguments173['alternativeMarkupIdentifier'] = NULL;
$arguments173['identifier'] = 'actions-edit-delete';

$output169 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output169 .= '</a>
                                                        ';
return $output169;
};
$arguments167['__elseClosures'][] = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['key'] = NULL;
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['languageKey'] = NULL;
$arguments176['alternativeLanguageKeys'] = NULL;
$arguments176['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output175 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['identifier'] = NULL;
$arguments178['size'] = 'small';
$arguments178['overlay'] = NULL;
$arguments178['state'] = 'default';
$arguments178['alternativeMarkupIdentifier'] = NULL;
$arguments178['identifier'] = 'actions-edit-delete';

$output175 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output175 .= '</button>
                                                        ';
return $output175;
};

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output160 .= '
                                                ';
return $output160;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output26 .= '
                                        </div>
                                    </td>
                                    <td class="nowrap">';
$array255 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array255)]);

$output26 .= '</td>
                                    <td class="nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array271 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array271)]);

$output270 .= '" data-form-name="';
$array272 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array272)]);

$output270 .= '">';
$array273 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array273)]);

$output270 .= '</a>
                                            ';
return $output270;
};
$arguments268 = array();

$output267 .= '';

$output267 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
                                                ';
$array277 = array (
);
$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array277)]);

$output276 .= '
                                            ';
return $output276;
};
$arguments274 = array();
$arguments274['if'] = NULL;

$output267 .= '';

$output267 .= '
                                        ';
return $output267;
};
$arguments256 = array();
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$arguments256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments256['__thenClosure'] = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array259 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array259)]);

$output258 .= '" data-form-name="';
$array260 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array260)]);

$output258 .= '">';
$array261 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array261)]);

$output258 .= '</a>
                                            ';
return $output258;
};
$arguments256['__elseClosures'][] = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                                                ';
$array263 = array (
);
$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array263)]);

$output262 .= '
                                            ';
return $output262;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output26 .= '
                                    </td>
                                </tr>
                            ';
return $output26;
};
$arguments23 = array();
$arguments23['each'] = NULL;
$arguments23['as'] = NULL;
$arguments23['key'] = NULL;
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$array25 = array (
);$arguments23['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array25);
$arguments23['as'] = 'form';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output10 .= '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['key'] = NULL;
$arguments284['id'] = NULL;
$arguments284['default'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['extensionName'] = NULL;
$arguments284['languageKey'] = NULL;
$arguments284['alternativeLanguageKeys'] = NULL;
$arguments284['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext)]);

$output283 .= '</p>
            <a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['key'] = NULL;
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$arguments286['languageKey'] = NULL;
$arguments286['alternativeLanguageKeys'] = NULL;
$arguments286['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext)]);

$output283 .= '</a>
        ';
return $output283;
};
$arguments279 = array();
$arguments279['message'] = NULL;
$arguments279['title'] = NULL;
$arguments279['state'] = -2;
$arguments279['iconName'] = NULL;
$arguments279['disableIcon'] = false;
$arguments279['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments279['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);
$renderChildrenClosure280 = ($arguments279['message'] !== null) ? function() use ($arguments279) { return $arguments279['message']; } : $renderChildrenClosure280;
$output278 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output278 .= '
    ';
return $output278;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output574 = '';

$output574 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['name'] = NULL;
$arguments575['name'] = 'FormManager';

$output574 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output574 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
$output579 = '';

$output579 .= '

    <script>
        require([\'';
$array580 = array (
);
$output579 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array580)]);

$output579 .= '\', \'';
$array581 = array (
);
$output579 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array581)]);

$output579 .= '\'], function (formManagerApp, viewModel) {
            var FORMMANAGER_APP = formManagerApp.getInstance(
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
$array584 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array584);
};
$arguments582 = array();
$arguments582['value'] = NULL;
$arguments582['keepQuotes'] = false;
$arguments582['encoding'] = NULL;
$renderChildrenClosure583 = ($arguments582['value'] !== null) ? function() use ($arguments582) { return $arguments582['value']; } : $renderChildrenClosure583;
$output579 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output579 .= ',
                viewModel
            ).run();
        });
    </script>
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['key'] = NULL;
$arguments585['id'] = NULL;
$arguments585['default'] = NULL;
$arguments585['arguments'] = NULL;
$arguments585['extensionName'] = NULL;
$arguments585['languageKey'] = NULL;
$arguments585['alternativeLanguageKeys'] = NULL;
$arguments585['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output579 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext)]);

$output579 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output870 = '';

$output870 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
$output873 = '';

$output873 .= '
            <div class="panel panel-space panel-default recordlist">
                <div class="panel-heading">
                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments874 = array();
$arguments874['key'] = NULL;
$arguments874['id'] = NULL;
$arguments874['default'] = NULL;
$arguments874['arguments'] = NULL;
$arguments874['extensionName'] = NULL;
$arguments874['languageKey'] = NULL;
$arguments874['alternativeLanguageKeys'] = NULL;
$arguments874['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext)]);

$output873 .= '</span>
                </div>
                <div class="collapse in">
                    <div class="table-fit">
                        <table id="forms" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure877 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments876 = array();
$arguments876['key'] = NULL;
$arguments876['id'] = NULL;
$arguments876['default'] = NULL;
$arguments876['arguments'] = NULL;
$arguments876['extensionName'] = NULL;
$arguments876['languageKey'] = NULL;
$arguments876['alternativeLanguageKeys'] = NULL;
$arguments876['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments876, $renderChildrenClosure877, $renderingContext)]);

$output873 .= '" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure879 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments878 = array();
$arguments878['identifier'] = NULL;
$arguments878['size'] = 'small';
$arguments878['overlay'] = NULL;
$arguments878['state'] = 'default';
$arguments878['alternativeMarkupIdentifier'] = NULL;
$arguments878['identifier'] = 'actions-add';

$output873 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments878, $renderChildrenClosure879, $renderingContext);

$output873 .= '</a></th>
                                    <th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments880 = array();
$arguments880['key'] = NULL;
$arguments880['id'] = NULL;
$arguments880['default'] = NULL;
$arguments880['arguments'] = NULL;
$arguments880['extensionName'] = NULL;
$arguments880['languageKey'] = NULL;
$arguments880['alternativeLanguageKeys'] = NULL;
$arguments880['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext)]);

$output873 .= '</th>
                                    <th class="col-control nowrap"></th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['key'] = NULL;
$arguments882['id'] = NULL;
$arguments882['default'] = NULL;
$arguments882['arguments'] = NULL;
$arguments882['extensionName'] = NULL;
$arguments882['languageKey'] = NULL;
$arguments882['alternativeLanguageKeys'] = NULL;
$arguments882['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext)]);

$output873 .= '</th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments884 = array();
$arguments884['key'] = NULL;
$arguments884['id'] = NULL;
$arguments884['default'] = NULL;
$arguments884['arguments'] = NULL;
$arguments884['extensionName'] = NULL;
$arguments884['languageKey'] = NULL;
$arguments884['alternativeLanguageKeys'] = NULL;
$arguments884['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments884, $renderChildrenClosure885, $renderingContext)]);

$output873 .= '</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure887 = function() use ($renderingContext, $self) {
$output889 = '';

$output889 .= '
                                <tr>
                                    <td class="col-icon nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
$output913 = '';

$output913 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
$output916 = '';

$output916 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments917 = array();
$arguments917['key'] = NULL;
$arguments917['id'] = NULL;
$arguments917['default'] = NULL;
$arguments917['arguments'] = NULL;
$arguments917['extensionName'] = NULL;
$arguments917['languageKey'] = NULL;
$arguments917['alternativeLanguageKeys'] = NULL;
$arguments917['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output916 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext)]);

$output916 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments919 = array();
$arguments919['identifier'] = NULL;
$arguments919['size'] = 'small';
$arguments919['overlay'] = NULL;
$arguments919['state'] = 'default';
$arguments919['alternativeMarkupIdentifier'] = NULL;
$arguments919['identifier'] = 'overlay-missing';

$output916 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments919, $renderChildrenClosure920, $renderingContext);

$output916 .= '
                                                </span>
                                            ';
return $output916;
};
$arguments914 = array();

$output913 .= '';

$output913 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure922 = function() use ($renderingContext, $self) {
$output926 = '';

$output926 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments927 = array();
$arguments927['key'] = NULL;
$arguments927['id'] = NULL;
$arguments927['default'] = NULL;
$arguments927['arguments'] = NULL;
$arguments927['extensionName'] = NULL;
$arguments927['languageKey'] = NULL;
$arguments927['alternativeLanguageKeys'] = NULL;
$arguments927['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output926 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments927, $renderChildrenClosure928, $renderingContext)]);

$output926 .= ' ';
$array929 = array (
);
$output926 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array929)]);

$output926 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure931 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments930 = array();
$arguments930['identifier'] = NULL;
$arguments930['size'] = 'small';
$arguments930['overlay'] = NULL;
$arguments930['state'] = 'default';
$arguments930['alternativeMarkupIdentifier'] = NULL;
$arguments930['identifier'] = 'overlay-missing';

$output926 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments930, $renderChildrenClosure931, $renderingContext);

$output926 .= '
                                                </span>
                                            ';
return $output926;
};
$arguments921 = array();
$arguments921['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array923 = array();
$array924 = array (
);$array923['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array924);

$expression925 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments921['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression925(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array923)
					),
					$renderingContext
				);

$output913 .= '';

$output913 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
$output934 = '';

$output934 .= '
                                                <span title="id=';
$array935 = array (
);
$output934 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array935)]);

$output934 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments936 = array();
$arguments936['identifier'] = NULL;
$arguments936['size'] = 'small';
$arguments936['overlay'] = NULL;
$arguments936['state'] = 'default';
$arguments936['alternativeMarkupIdentifier'] = NULL;
$arguments936['identifier'] = 'content-form';

$output934 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext);

$output934 .= '
                                                </span>
                                            ';
return $output934;
};
$arguments932 = array();
$arguments932['if'] = NULL;

$output913 .= '';

$output913 .= '
                                        ';
return $output913;
};
$arguments890 = array();
$arguments890['then'] = NULL;
$arguments890['else'] = NULL;
$arguments890['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array910 = array();
$array911 = array (
);$array910['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array911);

$expression912 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments890['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression912(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array910)
					),
					$renderingContext
				);
$arguments890['__thenClosure'] = function() use ($renderingContext, $self) {
$output892 = '';

$output892 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments893 = array();
$arguments893['key'] = NULL;
$arguments893['id'] = NULL;
$arguments893['default'] = NULL;
$arguments893['arguments'] = NULL;
$arguments893['extensionName'] = NULL;
$arguments893['languageKey'] = NULL;
$arguments893['alternativeLanguageKeys'] = NULL;
$arguments893['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output892 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext)]);

$output892 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments895 = array();
$arguments895['identifier'] = NULL;
$arguments895['size'] = 'small';
$arguments895['overlay'] = NULL;
$arguments895['state'] = 'default';
$arguments895['alternativeMarkupIdentifier'] = NULL;
$arguments895['identifier'] = 'overlay-missing';

$output892 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext);

$output892 .= '
                                                </span>
                                            ';
return $output892;
};
$arguments890['__elseClosures'][] = function() use ($renderingContext, $self) {
$output897 = '';

$output897 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments898 = array();
$arguments898['key'] = NULL;
$arguments898['id'] = NULL;
$arguments898['default'] = NULL;
$arguments898['arguments'] = NULL;
$arguments898['extensionName'] = NULL;
$arguments898['languageKey'] = NULL;
$arguments898['alternativeLanguageKeys'] = NULL;
$arguments898['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output897 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext)]);

$output897 .= ' ';
$array900 = array (
);
$output897 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array900)]);

$output897 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure902 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments901 = array();
$arguments901['identifier'] = NULL;
$arguments901['size'] = 'small';
$arguments901['overlay'] = NULL;
$arguments901['state'] = 'default';
$arguments901['alternativeMarkupIdentifier'] = NULL;
$arguments901['identifier'] = 'overlay-missing';

$output897 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments901, $renderChildrenClosure902, $renderingContext);

$output897 .= '
                                                </span>
                                            ';
return $output897;
};
$arguments890['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array903 = array();
$array904 = array (
);$array903['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array904);

$expression905 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression905(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array903)
					),
					$renderingContext
				);
};
$arguments890['__elseClosures'][] = function() use ($renderingContext, $self) {
$output906 = '';

$output906 .= '
                                                <span title="id=';
$array907 = array (
);
$output906 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array907)]);

$output906 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments908 = array();
$arguments908['identifier'] = NULL;
$arguments908['size'] = 'small';
$arguments908['overlay'] = NULL;
$arguments908['state'] = 'default';
$arguments908['alternativeMarkupIdentifier'] = NULL;
$arguments908['identifier'] = 'content-form';

$output906 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments908, $renderChildrenClosure909, $renderingContext);

$output906 .= '
                                                </span>
                                            ';
return $output906;
};

$output889 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments890, $renderChildrenClosure891, $renderingContext);

$output889 .= '
                                    </td>
                                    <td class="col-title col-responsive nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure939 = function() use ($renderingContext, $self) {
$output956 = '';

$output956 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure958 = function() use ($renderingContext, $self) {
$output959 = '';

$output959 .= '
                                                    <div title="';
$array960 = array (
);
$output959 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array960)]);

$output959 .= '">';
$array961 = array (
);
$output959 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array961)]);

$output959 .= '</div>
                                                ';
return $output959;
};
$arguments957 = array();

$output956 .= '';

$output956 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure963 = function() use ($renderingContext, $self) {
$output964 = '';

$output964 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
$array972 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array972)]);
};
$arguments965 = array();
$arguments965['additionalAttributes'] = NULL;
$arguments965['data'] = NULL;
$arguments965['class'] = NULL;
$arguments965['dir'] = NULL;
$arguments965['id'] = NULL;
$arguments965['lang'] = NULL;
$arguments965['style'] = NULL;
$arguments965['title'] = NULL;
$arguments965['accesskey'] = NULL;
$arguments965['tabindex'] = NULL;
$arguments965['onclick'] = NULL;
$arguments965['name'] = NULL;
$arguments965['rel'] = NULL;
$arguments965['rev'] = NULL;
$arguments965['target'] = NULL;
$arguments965['action'] = NULL;
$arguments965['controller'] = NULL;
$arguments965['extensionName'] = NULL;
$arguments965['pluginName'] = NULL;
$arguments965['pageUid'] = NULL;
$arguments965['pageType'] = NULL;
$arguments965['noCache'] = NULL;
$arguments965['noCacheHash'] = NULL;
$arguments965['section'] = NULL;
$arguments965['format'] = NULL;
$arguments965['linkAccessRestrictedPages'] = NULL;
$arguments965['additionalParams'] = NULL;
$arguments965['absolute'] = NULL;
$arguments965['addQueryString'] = NULL;
$arguments965['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments965['addQueryStringMethod'] = NULL;
$arguments965['arguments'] = NULL;
$arguments965['controller'] = 'FormEditor';
$arguments965['action'] = 'index';
// Rendering Array
$array967 = array();
$array968 = array (
);$array967['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array968);
$arguments965['arguments'] = $array967;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments969 = array();
$arguments969['key'] = NULL;
$arguments969['id'] = NULL;
$arguments969['default'] = NULL;
$arguments969['arguments'] = NULL;
$arguments969['extensionName'] = NULL;
$arguments969['languageKey'] = NULL;
$arguments969['alternativeLanguageKeys'] = NULL;
$arguments969['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments965['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments969, $renderChildrenClosure970, $renderingContext);
// Rendering Array
$array971 = array();
$array971['toggle'] = 'tooltip';
$array971['placement'] = 'right';
$arguments965['data'] = $array971;

$output964 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments965, $renderChildrenClosure966, $renderingContext);

$output964 .= '
                                                ';
return $output964;
};
$arguments962 = array();
$arguments962['if'] = NULL;

$output956 .= '';

$output956 .= '
                                        ';
return $output956;
};
$arguments938 = array();
$arguments938['then'] = NULL;
$arguments938['else'] = NULL;
$arguments938['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array952 = array();
$array953 = array (
);$array952['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array953);
$array952['1'] = ' || ';
$array954 = array (
);$array952['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array954);

$expression955 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments938['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression955(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array952)
					),
					$renderingContext
				);
$arguments938['__thenClosure'] = function() use ($renderingContext, $self) {
$output940 = '';

$output940 .= '
                                                    <div title="';
$array941 = array (
);
$output940 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array941)]);

$output940 .= '">';
$array942 = array (
);
$output940 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array942)]);

$output940 .= '</div>
                                                ';
return $output940;
};
$arguments938['__elseClosures'][] = function() use ($renderingContext, $self) {
$output943 = '';

$output943 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure945 = function() use ($renderingContext, $self) {
$array951 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array951)]);
};
$arguments944 = array();
$arguments944['additionalAttributes'] = NULL;
$arguments944['data'] = NULL;
$arguments944['class'] = NULL;
$arguments944['dir'] = NULL;
$arguments944['id'] = NULL;
$arguments944['lang'] = NULL;
$arguments944['style'] = NULL;
$arguments944['title'] = NULL;
$arguments944['accesskey'] = NULL;
$arguments944['tabindex'] = NULL;
$arguments944['onclick'] = NULL;
$arguments944['name'] = NULL;
$arguments944['rel'] = NULL;
$arguments944['rev'] = NULL;
$arguments944['target'] = NULL;
$arguments944['action'] = NULL;
$arguments944['controller'] = NULL;
$arguments944['extensionName'] = NULL;
$arguments944['pluginName'] = NULL;
$arguments944['pageUid'] = NULL;
$arguments944['pageType'] = NULL;
$arguments944['noCache'] = NULL;
$arguments944['noCacheHash'] = NULL;
$arguments944['section'] = NULL;
$arguments944['format'] = NULL;
$arguments944['linkAccessRestrictedPages'] = NULL;
$arguments944['additionalParams'] = NULL;
$arguments944['absolute'] = NULL;
$arguments944['addQueryString'] = NULL;
$arguments944['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments944['addQueryStringMethod'] = NULL;
$arguments944['arguments'] = NULL;
$arguments944['controller'] = 'FormEditor';
$arguments944['action'] = 'index';
// Rendering Array
$array946 = array();
$array947 = array (
);$array946['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array947);
$arguments944['arguments'] = $array946;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments948 = array();
$arguments948['key'] = NULL;
$arguments948['id'] = NULL;
$arguments948['default'] = NULL;
$arguments948['arguments'] = NULL;
$arguments948['extensionName'] = NULL;
$arguments948['languageKey'] = NULL;
$arguments948['alternativeLanguageKeys'] = NULL;
$arguments948['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments944['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext);
// Rendering Array
$array950 = array();
$array950['toggle'] = 'tooltip';
$array950['placement'] = 'right';
$arguments944['data'] = $array950;

$output943 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments944, $renderChildrenClosure945, $renderingContext);

$output943 .= '
                                                ';
return $output943;
};

$output889 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments938, $renderChildrenClosure939, $renderingContext);

$output889 .= '
                                    </td>
                                    <td class="col-control nowrap">
                                        <div class="btn-group" role="group">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure974 = function() use ($renderingContext, $self) {
$output993 = '';

$output993 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure995 = function() use ($renderingContext, $self) {
$output996 = '';

$output996 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments997 = array();
$arguments997['key'] = NULL;
$arguments997['id'] = NULL;
$arguments997['default'] = NULL;
$arguments997['arguments'] = NULL;
$arguments997['extensionName'] = NULL;
$arguments997['languageKey'] = NULL;
$arguments997['alternativeLanguageKeys'] = NULL;
$arguments997['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output996 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext)]);

$output996 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1000 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments999 = array();
$arguments999['identifier'] = NULL;
$arguments999['size'] = 'small';
$arguments999['overlay'] = NULL;
$arguments999['state'] = 'default';
$arguments999['alternativeMarkupIdentifier'] = NULL;
$arguments999['identifier'] = 'actions-open';

$output996 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments999, $renderChildrenClosure1000, $renderingContext);

$output996 .= '</button>
                                                ';
return $output996;
};
$arguments994 = array();

$output993 .= '';

$output993 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1002 = function() use ($renderingContext, $self) {
$output1003 = '';

$output1003 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1010 = array();
$arguments1010['identifier'] = NULL;
$arguments1010['size'] = 'small';
$arguments1010['overlay'] = NULL;
$arguments1010['state'] = 'default';
$arguments1010['alternativeMarkupIdentifier'] = NULL;
$arguments1010['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1010, $renderChildrenClosure1011, $renderingContext);
};
$arguments1004 = array();
$arguments1004['additionalAttributes'] = NULL;
$arguments1004['data'] = NULL;
$arguments1004['class'] = NULL;
$arguments1004['dir'] = NULL;
$arguments1004['id'] = NULL;
$arguments1004['lang'] = NULL;
$arguments1004['style'] = NULL;
$arguments1004['title'] = NULL;
$arguments1004['accesskey'] = NULL;
$arguments1004['tabindex'] = NULL;
$arguments1004['onclick'] = NULL;
$arguments1004['name'] = NULL;
$arguments1004['rel'] = NULL;
$arguments1004['rev'] = NULL;
$arguments1004['target'] = NULL;
$arguments1004['action'] = NULL;
$arguments1004['controller'] = NULL;
$arguments1004['extensionName'] = NULL;
$arguments1004['pluginName'] = NULL;
$arguments1004['pageUid'] = NULL;
$arguments1004['pageType'] = NULL;
$arguments1004['noCache'] = NULL;
$arguments1004['noCacheHash'] = NULL;
$arguments1004['section'] = NULL;
$arguments1004['format'] = NULL;
$arguments1004['linkAccessRestrictedPages'] = NULL;
$arguments1004['additionalParams'] = NULL;
$arguments1004['absolute'] = NULL;
$arguments1004['addQueryString'] = NULL;
$arguments1004['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1004['addQueryStringMethod'] = NULL;
$arguments1004['arguments'] = NULL;
$arguments1004['controller'] = 'FormEditor';
$arguments1004['action'] = 'index';
// Rendering Array
$array1006 = array();
$array1007 = array (
);$array1006['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1007);
$arguments1004['arguments'] = $array1006;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1009 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1008 = array();
$arguments1008['key'] = NULL;
$arguments1008['id'] = NULL;
$arguments1008['default'] = NULL;
$arguments1008['arguments'] = NULL;
$arguments1008['extensionName'] = NULL;
$arguments1008['languageKey'] = NULL;
$arguments1008['alternativeLanguageKeys'] = NULL;
$arguments1008['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments1004['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1008, $renderChildrenClosure1009, $renderingContext);
$arguments1004['class'] = 'btn btn-default form-record-open';

$output1003 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);

$output1003 .= '
                                                ';
return $output1003;
};
$arguments1001 = array();
$arguments1001['if'] = NULL;

$output993 .= '';

$output993 .= '
                                            ';
return $output993;
};
$arguments973 = array();
$arguments973['then'] = NULL;
$arguments973['else'] = NULL;
$arguments973['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array989 = array();
$array990 = array (
);$array989['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array990);
$array989['1'] = ' || ';
$array991 = array (
);$array989['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array991);

$expression992 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments973['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression992(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array989)
					),
					$renderingContext
				);
$arguments973['__thenClosure'] = function() use ($renderingContext, $self) {
$output975 = '';

$output975 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments976 = array();
$arguments976['key'] = NULL;
$arguments976['id'] = NULL;
$arguments976['default'] = NULL;
$arguments976['arguments'] = NULL;
$arguments976['extensionName'] = NULL;
$arguments976['languageKey'] = NULL;
$arguments976['alternativeLanguageKeys'] = NULL;
$arguments976['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output975 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments976, $renderChildrenClosure977, $renderingContext)]);

$output975 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure979 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments978 = array();
$arguments978['identifier'] = NULL;
$arguments978['size'] = 'small';
$arguments978['overlay'] = NULL;
$arguments978['state'] = 'default';
$arguments978['alternativeMarkupIdentifier'] = NULL;
$arguments978['identifier'] = 'actions-open';

$output975 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments978, $renderChildrenClosure979, $renderingContext);

$output975 .= '</button>
                                                ';
return $output975;
};
$arguments973['__elseClosures'][] = function() use ($renderingContext, $self) {
$output980 = '';

$output980 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure982 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure988 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments987 = array();
$arguments987['identifier'] = NULL;
$arguments987['size'] = 'small';
$arguments987['overlay'] = NULL;
$arguments987['state'] = 'default';
$arguments987['alternativeMarkupIdentifier'] = NULL;
$arguments987['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments987, $renderChildrenClosure988, $renderingContext);
};
$arguments981 = array();
$arguments981['additionalAttributes'] = NULL;
$arguments981['data'] = NULL;
$arguments981['class'] = NULL;
$arguments981['dir'] = NULL;
$arguments981['id'] = NULL;
$arguments981['lang'] = NULL;
$arguments981['style'] = NULL;
$arguments981['title'] = NULL;
$arguments981['accesskey'] = NULL;
$arguments981['tabindex'] = NULL;
$arguments981['onclick'] = NULL;
$arguments981['name'] = NULL;
$arguments981['rel'] = NULL;
$arguments981['rev'] = NULL;
$arguments981['target'] = NULL;
$arguments981['action'] = NULL;
$arguments981['controller'] = NULL;
$arguments981['extensionName'] = NULL;
$arguments981['pluginName'] = NULL;
$arguments981['pageUid'] = NULL;
$arguments981['pageType'] = NULL;
$arguments981['noCache'] = NULL;
$arguments981['noCacheHash'] = NULL;
$arguments981['section'] = NULL;
$arguments981['format'] = NULL;
$arguments981['linkAccessRestrictedPages'] = NULL;
$arguments981['additionalParams'] = NULL;
$arguments981['absolute'] = NULL;
$arguments981['addQueryString'] = NULL;
$arguments981['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments981['addQueryStringMethod'] = NULL;
$arguments981['arguments'] = NULL;
$arguments981['controller'] = 'FormEditor';
$arguments981['action'] = 'index';
// Rendering Array
$array983 = array();
$array984 = array (
);$array983['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array984);
$arguments981['arguments'] = $array983;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure986 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments985 = array();
$arguments985['key'] = NULL;
$arguments985['id'] = NULL;
$arguments985['default'] = NULL;
$arguments985['arguments'] = NULL;
$arguments985['extensionName'] = NULL;
$arguments985['languageKey'] = NULL;
$arguments985['alternativeLanguageKeys'] = NULL;
$arguments985['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments981['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments985, $renderChildrenClosure986, $renderingContext);
$arguments981['class'] = 'btn btn-default form-record-open';

$output980 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments981, $renderChildrenClosure982, $renderingContext);

$output980 .= '
                                                ';
return $output980;
};

$output889 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments973, $renderChildrenClosure974, $renderingContext);

$output889 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
$output1065 = '';

$output1065 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
$output1068 = '';

$output1068 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1070 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1069 = array();
$arguments1069['key'] = NULL;
$arguments1069['id'] = NULL;
$arguments1069['default'] = NULL;
$arguments1069['arguments'] = NULL;
$arguments1069['extensionName'] = NULL;
$arguments1069['languageKey'] = NULL;
$arguments1069['alternativeLanguageKeys'] = NULL;
$arguments1069['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output1068 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1069, $renderChildrenClosure1070, $renderingContext)]);

$output1068 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1072 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1071 = array();
$arguments1071['identifier'] = NULL;
$arguments1071['size'] = 'small';
$arguments1071['overlay'] = NULL;
$arguments1071['state'] = 'default';
$arguments1071['alternativeMarkupIdentifier'] = NULL;
$arguments1071['identifier'] = 'actions-duplicate';

$output1068 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1071, $renderChildrenClosure1072, $renderingContext);

$output1068 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1074 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1073 = array();
$arguments1073['key'] = NULL;
$arguments1073['id'] = NULL;
$arguments1073['default'] = NULL;
$arguments1073['arguments'] = NULL;
$arguments1073['extensionName'] = NULL;
$arguments1073['languageKey'] = NULL;
$arguments1073['alternativeLanguageKeys'] = NULL;
$arguments1073['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1068 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1073, $renderChildrenClosure1074, $renderingContext)]);

$output1068 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1076 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1075 = array();
$arguments1075['identifier'] = NULL;
$arguments1075['size'] = 'small';
$arguments1075['overlay'] = NULL;
$arguments1075['state'] = 'default';
$arguments1075['alternativeMarkupIdentifier'] = NULL;
$arguments1075['identifier'] = 'actions-edit-delete';

$output1068 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1075, $renderChildrenClosure1076, $renderingContext);

$output1068 .= '</button>
                                                ';
return $output1068;
};
$arguments1066 = array();

$output1065 .= '';

$output1065 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1078 = function() use ($renderingContext, $self) {
$output1079 = '';

$output1079 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array1080 = array (
);
$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1080)]);

$output1079 .= '" data-form-name="';
$array1081 = array (
);
$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1081)]);

$output1079 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1082 = array();
$arguments1082['key'] = NULL;
$arguments1082['id'] = NULL;
$arguments1082['default'] = NULL;
$arguments1082['arguments'] = NULL;
$arguments1082['extensionName'] = NULL;
$arguments1082['languageKey'] = NULL;
$arguments1082['alternativeLanguageKeys'] = NULL;
$arguments1082['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output1079 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1082, $renderChildrenClosure1083, $renderingContext)]);

$output1079 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1085 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1084 = array();
$arguments1084['identifier'] = NULL;
$arguments1084['size'] = 'small';
$arguments1084['overlay'] = NULL;
$arguments1084['state'] = 'default';
$arguments1084['alternativeMarkupIdentifier'] = NULL;
$arguments1084['identifier'] = 'actions-duplicate';

$output1079 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1084, $renderChildrenClosure1085, $renderingContext);

$output1079 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1087 = function() use ($renderingContext, $self) {
$output1102 = '';

$output1102 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1104 = function() use ($renderingContext, $self) {
$output1105 = '';

$output1105 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1106 = array (
);
$output1105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1106)]);

$output1105 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1107 = array();
$arguments1107['key'] = NULL;
$arguments1107['id'] = NULL;
$arguments1107['default'] = NULL;
$arguments1107['arguments'] = NULL;
$arguments1107['extensionName'] = NULL;
$arguments1107['languageKey'] = NULL;
$arguments1107['alternativeLanguageKeys'] = NULL;
$arguments1107['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1107, $renderChildrenClosure1108, $renderingContext)]);

$output1105 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1109 = array();
$arguments1109['identifier'] = NULL;
$arguments1109['size'] = 'small';
$arguments1109['overlay'] = NULL;
$arguments1109['state'] = 'default';
$arguments1109['alternativeMarkupIdentifier'] = NULL;
$arguments1109['identifier'] = 'actions-edit-delete';

$output1105 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1109, $renderChildrenClosure1110, $renderingContext);

$output1105 .= '</a>
                                                        ';
return $output1105;
};
$arguments1103 = array();

$output1102 .= '';

$output1102 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1112 = function() use ($renderingContext, $self) {
$output1113 = '';

$output1113 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1114 = array();
$arguments1114['key'] = NULL;
$arguments1114['id'] = NULL;
$arguments1114['default'] = NULL;
$arguments1114['arguments'] = NULL;
$arguments1114['extensionName'] = NULL;
$arguments1114['languageKey'] = NULL;
$arguments1114['alternativeLanguageKeys'] = NULL;
$arguments1114['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1114, $renderChildrenClosure1115, $renderingContext)]);

$output1113 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1116 = array();
$arguments1116['identifier'] = NULL;
$arguments1116['size'] = 'small';
$arguments1116['overlay'] = NULL;
$arguments1116['state'] = 'default';
$arguments1116['alternativeMarkupIdentifier'] = NULL;
$arguments1116['identifier'] = 'actions-edit-delete';

$output1113 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1116, $renderChildrenClosure1117, $renderingContext);

$output1113 .= '</button>
                                                        ';
return $output1113;
};
$arguments1111 = array();
$arguments1111['if'] = NULL;

$output1102 .= '';

$output1102 .= '
                                                    ';
return $output1102;
};
$arguments1086 = array();
$arguments1086['then'] = NULL;
$arguments1086['else'] = NULL;
$arguments1086['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1099 = array();
$array1100 = array (
);$array1099['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array1100);

$expression1101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1086['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1099)
					),
					$renderingContext
				);
$arguments1086['__thenClosure'] = function() use ($renderingContext, $self) {
$output1088 = '';

$output1088 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1089 = array (
);
$output1088 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1089)]);

$output1088 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1091 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1090 = array();
$arguments1090['key'] = NULL;
$arguments1090['id'] = NULL;
$arguments1090['default'] = NULL;
$arguments1090['arguments'] = NULL;
$arguments1090['extensionName'] = NULL;
$arguments1090['languageKey'] = NULL;
$arguments1090['alternativeLanguageKeys'] = NULL;
$arguments1090['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1088 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1090, $renderChildrenClosure1091, $renderingContext)]);

$output1088 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1093 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1092 = array();
$arguments1092['identifier'] = NULL;
$arguments1092['size'] = 'small';
$arguments1092['overlay'] = NULL;
$arguments1092['state'] = 'default';
$arguments1092['alternativeMarkupIdentifier'] = NULL;
$arguments1092['identifier'] = 'actions-edit-delete';

$output1088 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1092, $renderChildrenClosure1093, $renderingContext);

$output1088 .= '</a>
                                                        ';
return $output1088;
};
$arguments1086['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1094 = '';

$output1094 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1095 = array();
$arguments1095['key'] = NULL;
$arguments1095['id'] = NULL;
$arguments1095['default'] = NULL;
$arguments1095['arguments'] = NULL;
$arguments1095['extensionName'] = NULL;
$arguments1095['languageKey'] = NULL;
$arguments1095['alternativeLanguageKeys'] = NULL;
$arguments1095['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1094 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext)]);

$output1094 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1098 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1097 = array();
$arguments1097['identifier'] = NULL;
$arguments1097['size'] = 'small';
$arguments1097['overlay'] = NULL;
$arguments1097['state'] = 'default';
$arguments1097['alternativeMarkupIdentifier'] = NULL;
$arguments1097['identifier'] = 'actions-edit-delete';

$output1094 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1097, $renderChildrenClosure1098, $renderingContext);

$output1094 .= '</button>
                                                        ';
return $output1094;
};

$output1079 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1086, $renderChildrenClosure1087, $renderingContext);

$output1079 .= '
                                                ';
return $output1079;
};
$arguments1077 = array();
$arguments1077['if'] = NULL;

$output1065 .= '';

$output1065 .= '
                                            ';
return $output1065;
};
$arguments1012 = array();
$arguments1012['then'] = NULL;
$arguments1012['else'] = NULL;
$arguments1012['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1062 = array();
$array1063 = array (
);$array1062['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array1063);

$expression1064 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1012['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1064(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1062)
					),
					$renderingContext
				);
$arguments1012['__thenClosure'] = function() use ($renderingContext, $self) {
$output1014 = '';

$output1014 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1016 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1015 = array();
$arguments1015['key'] = NULL;
$arguments1015['id'] = NULL;
$arguments1015['default'] = NULL;
$arguments1015['arguments'] = NULL;
$arguments1015['extensionName'] = NULL;
$arguments1015['languageKey'] = NULL;
$arguments1015['alternativeLanguageKeys'] = NULL;
$arguments1015['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output1014 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1015, $renderChildrenClosure1016, $renderingContext)]);

$output1014 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1018 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1017 = array();
$arguments1017['identifier'] = NULL;
$arguments1017['size'] = 'small';
$arguments1017['overlay'] = NULL;
$arguments1017['state'] = 'default';
$arguments1017['alternativeMarkupIdentifier'] = NULL;
$arguments1017['identifier'] = 'actions-duplicate';

$output1014 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1017, $renderChildrenClosure1018, $renderingContext);

$output1014 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1020 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1019 = array();
$arguments1019['key'] = NULL;
$arguments1019['id'] = NULL;
$arguments1019['default'] = NULL;
$arguments1019['arguments'] = NULL;
$arguments1019['extensionName'] = NULL;
$arguments1019['languageKey'] = NULL;
$arguments1019['alternativeLanguageKeys'] = NULL;
$arguments1019['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1014 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1019, $renderChildrenClosure1020, $renderingContext)]);

$output1014 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1021 = array();
$arguments1021['identifier'] = NULL;
$arguments1021['size'] = 'small';
$arguments1021['overlay'] = NULL;
$arguments1021['state'] = 'default';
$arguments1021['alternativeMarkupIdentifier'] = NULL;
$arguments1021['identifier'] = 'actions-edit-delete';

$output1014 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1021, $renderChildrenClosure1022, $renderingContext);

$output1014 .= '</button>
                                                ';
return $output1014;
};
$arguments1012['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1023 = '';

$output1023 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array1024 = array (
);
$output1023 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1024)]);

$output1023 .= '" data-form-name="';
$array1025 = array (
);
$output1023 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1025)]);

$output1023 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1027 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1026 = array();
$arguments1026['key'] = NULL;
$arguments1026['id'] = NULL;
$arguments1026['default'] = NULL;
$arguments1026['arguments'] = NULL;
$arguments1026['extensionName'] = NULL;
$arguments1026['languageKey'] = NULL;
$arguments1026['alternativeLanguageKeys'] = NULL;
$arguments1026['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output1023 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1026, $renderChildrenClosure1027, $renderingContext)]);

$output1023 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1029 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1028 = array();
$arguments1028['identifier'] = NULL;
$arguments1028['size'] = 'small';
$arguments1028['overlay'] = NULL;
$arguments1028['state'] = 'default';
$arguments1028['alternativeMarkupIdentifier'] = NULL;
$arguments1028['identifier'] = 'actions-duplicate';

$output1023 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1028, $renderChildrenClosure1029, $renderingContext);

$output1023 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1031 = function() use ($renderingContext, $self) {
$output1046 = '';

$output1046 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1050 = array (
);
$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1050)]);

$output1049 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1052 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1051 = array();
$arguments1051['key'] = NULL;
$arguments1051['id'] = NULL;
$arguments1051['default'] = NULL;
$arguments1051['arguments'] = NULL;
$arguments1051['extensionName'] = NULL;
$arguments1051['languageKey'] = NULL;
$arguments1051['alternativeLanguageKeys'] = NULL;
$arguments1051['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1051, $renderChildrenClosure1052, $renderingContext)]);

$output1049 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1054 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1053 = array();
$arguments1053['identifier'] = NULL;
$arguments1053['size'] = 'small';
$arguments1053['overlay'] = NULL;
$arguments1053['state'] = 'default';
$arguments1053['alternativeMarkupIdentifier'] = NULL;
$arguments1053['identifier'] = 'actions-edit-delete';

$output1049 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1053, $renderChildrenClosure1054, $renderingContext);

$output1049 .= '</a>
                                                        ';
return $output1049;
};
$arguments1047 = array();

$output1046 .= '';

$output1046 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
$output1057 = '';

$output1057 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1059 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1058 = array();
$arguments1058['key'] = NULL;
$arguments1058['id'] = NULL;
$arguments1058['default'] = NULL;
$arguments1058['arguments'] = NULL;
$arguments1058['extensionName'] = NULL;
$arguments1058['languageKey'] = NULL;
$arguments1058['alternativeLanguageKeys'] = NULL;
$arguments1058['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1057 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1058, $renderChildrenClosure1059, $renderingContext)]);

$output1057 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1061 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1060 = array();
$arguments1060['identifier'] = NULL;
$arguments1060['size'] = 'small';
$arguments1060['overlay'] = NULL;
$arguments1060['state'] = 'default';
$arguments1060['alternativeMarkupIdentifier'] = NULL;
$arguments1060['identifier'] = 'actions-edit-delete';

$output1057 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1060, $renderChildrenClosure1061, $renderingContext);

$output1057 .= '</button>
                                                        ';
return $output1057;
};
$arguments1055 = array();
$arguments1055['if'] = NULL;

$output1046 .= '';

$output1046 .= '
                                                    ';
return $output1046;
};
$arguments1030 = array();
$arguments1030['then'] = NULL;
$arguments1030['else'] = NULL;
$arguments1030['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1043 = array();
$array1044 = array (
);$array1043['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array1044);

$expression1045 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1030['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1045(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1043)
					),
					$renderingContext
				);
$arguments1030['__thenClosure'] = function() use ($renderingContext, $self) {
$output1032 = '';

$output1032 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1033 = array (
);
$output1032 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1033)]);

$output1032 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1035 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1034 = array();
$arguments1034['key'] = NULL;
$arguments1034['id'] = NULL;
$arguments1034['default'] = NULL;
$arguments1034['arguments'] = NULL;
$arguments1034['extensionName'] = NULL;
$arguments1034['languageKey'] = NULL;
$arguments1034['alternativeLanguageKeys'] = NULL;
$arguments1034['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1032 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1034, $renderChildrenClosure1035, $renderingContext)]);

$output1032 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1036 = array();
$arguments1036['identifier'] = NULL;
$arguments1036['size'] = 'small';
$arguments1036['overlay'] = NULL;
$arguments1036['state'] = 'default';
$arguments1036['alternativeMarkupIdentifier'] = NULL;
$arguments1036['identifier'] = 'actions-edit-delete';

$output1032 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1032 .= '</a>
                                                        ';
return $output1032;
};
$arguments1030['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1038 = '';

$output1038 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1040 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1039 = array();
$arguments1039['key'] = NULL;
$arguments1039['id'] = NULL;
$arguments1039['default'] = NULL;
$arguments1039['arguments'] = NULL;
$arguments1039['extensionName'] = NULL;
$arguments1039['languageKey'] = NULL;
$arguments1039['alternativeLanguageKeys'] = NULL;
$arguments1039['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1038 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1039, $renderChildrenClosure1040, $renderingContext)]);

$output1038 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1041 = array();
$arguments1041['identifier'] = NULL;
$arguments1041['size'] = 'small';
$arguments1041['overlay'] = NULL;
$arguments1041['state'] = 'default';
$arguments1041['alternativeMarkupIdentifier'] = NULL;
$arguments1041['identifier'] = 'actions-edit-delete';

$output1038 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output1038 .= '</button>
                                                        ';
return $output1038;
};

$output1023 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1030, $renderChildrenClosure1031, $renderingContext);

$output1023 .= '
                                                ';
return $output1023;
};

$output889 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext);

$output889 .= '
                                        </div>
                                    </td>
                                    <td class="nowrap">';
$array1118 = array (
);
$output889 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1118)]);

$output889 .= '</td>
                                    <td class="nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1120 = function() use ($renderingContext, $self) {
$output1130 = '';

$output1130 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1132 = function() use ($renderingContext, $self) {
$output1133 = '';

$output1133 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1134 = array (
);
$output1133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1134)]);

$output1133 .= '" data-form-name="';
$array1135 = array (
);
$output1133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1135)]);

$output1133 .= '">';
$array1136 = array (
);
$output1133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1136)]);

$output1133 .= '</a>
                                            ';
return $output1133;
};
$arguments1131 = array();

$output1130 .= '';

$output1130 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1138 = function() use ($renderingContext, $self) {
$output1139 = '';

$output1139 .= '
                                                ';
$array1140 = array (
);
$output1139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1140)]);

$output1139 .= '
                                            ';
return $output1139;
};
$arguments1137 = array();
$arguments1137['if'] = NULL;

$output1130 .= '';

$output1130 .= '
                                        ';
return $output1130;
};
$arguments1119 = array();
$arguments1119['then'] = NULL;
$arguments1119['else'] = NULL;
$arguments1119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1127 = array();
$array1128 = array (
);$array1127['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1128);

$expression1129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1127)
					),
					$renderingContext
				);
$arguments1119['__thenClosure'] = function() use ($renderingContext, $self) {
$output1121 = '';

$output1121 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1122 = array (
);
$output1121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1122)]);

$output1121 .= '" data-form-name="';
$array1123 = array (
);
$output1121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1123)]);

$output1121 .= '">';
$array1124 = array (
);
$output1121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1124)]);

$output1121 .= '</a>
                                            ';
return $output1121;
};
$arguments1119['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1125 = '';

$output1125 .= '
                                                ';
$array1126 = array (
);
$output1125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1126)]);

$output1125 .= '
                                            ';
return $output1125;
};

$output889 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1119, $renderChildrenClosure1120, $renderingContext);

$output889 .= '
                                    </td>
                                </tr>
                            ';
return $output889;
};
$arguments886 = array();
$arguments886['each'] = NULL;
$arguments886['as'] = NULL;
$arguments886['key'] = NULL;
$arguments886['reverse'] = false;
$arguments886['iteration'] = NULL;
$array888 = array (
);$arguments886['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array888);
$arguments886['as'] = 'form';

$output873 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments886, $renderChildrenClosure887, $renderingContext);

$output873 .= '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ';
return $output873;
};
$arguments871 = array();

$output870 .= '';

$output870 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1142 = function() use ($renderingContext, $self) {
$output1143 = '';

$output1143 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure1145 = function() use ($renderingContext, $self) {
$output1148 = '';

$output1148 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1149 = array();
$arguments1149['key'] = NULL;
$arguments1149['id'] = NULL;
$arguments1149['default'] = NULL;
$arguments1149['arguments'] = NULL;
$arguments1149['extensionName'] = NULL;
$arguments1149['languageKey'] = NULL;
$arguments1149['alternativeLanguageKeys'] = NULL;
$arguments1149['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output1148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1149, $renderChildrenClosure1150, $renderingContext)]);

$output1148 .= '</p>
            <a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1151 = array();
$arguments1151['key'] = NULL;
$arguments1151['id'] = NULL;
$arguments1151['default'] = NULL;
$arguments1151['arguments'] = NULL;
$arguments1151['extensionName'] = NULL;
$arguments1151['languageKey'] = NULL;
$arguments1151['alternativeLanguageKeys'] = NULL;
$arguments1151['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output1148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1151, $renderChildrenClosure1152, $renderingContext)]);

$output1148 .= '</a>
        ';
return $output1148;
};
$arguments1144 = array();
$arguments1144['message'] = NULL;
$arguments1144['title'] = NULL;
$arguments1144['state'] = -2;
$arguments1144['iconName'] = NULL;
$arguments1144['disableIcon'] = false;
$arguments1144['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1146 = array();
$arguments1146['key'] = NULL;
$arguments1146['id'] = NULL;
$arguments1146['default'] = NULL;
$arguments1146['arguments'] = NULL;
$arguments1146['extensionName'] = NULL;
$arguments1146['languageKey'] = NULL;
$arguments1146['alternativeLanguageKeys'] = NULL;
$arguments1146['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments1144['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1146, $renderChildrenClosure1147, $renderingContext);
$renderChildrenClosure1145 = ($arguments1144['message'] !== null) ? function() use ($arguments1144) { return $arguments1144['message']; } : $renderChildrenClosure1145;
$output1143 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1144, $renderChildrenClosure1145, $renderingContext);

$output1143 .= '
    ';
return $output1143;
};
$arguments1141 = array();
$arguments1141['if'] = NULL;

$output870 .= '';

$output870 .= '
';
return $output870;
};
$arguments587 = array();
$arguments587['then'] = NULL;
$arguments587['else'] = NULL;
$arguments587['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array867 = array();
$array868 = array (
);$array867['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array868);

$expression869 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments587['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression869(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array867)
					),
					$renderingContext
				);
$arguments587['__thenClosure'] = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
            <div class="panel panel-space panel-default recordlist">
                <div class="panel-heading">
                    <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments590 = array();
$arguments590['key'] = NULL;
$arguments590['id'] = NULL;
$arguments590['default'] = NULL;
$arguments590['arguments'] = NULL;
$arguments590['extensionName'] = NULL;
$arguments590['languageKey'] = NULL;
$arguments590['alternativeLanguageKeys'] = NULL;
$arguments590['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext)]);

$output589 .= '</span>
                </div>
                <div class="collapse in">
                    <div class="table-fit">
                        <table id="forms" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['key'] = NULL;
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$arguments592['languageKey'] = NULL;
$arguments592['alternativeLanguageKeys'] = NULL;
$arguments592['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output589 .= '" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments594 = array();
$arguments594['identifier'] = NULL;
$arguments594['size'] = 'small';
$arguments594['overlay'] = NULL;
$arguments594['state'] = 'default';
$arguments594['alternativeMarkupIdentifier'] = NULL;
$arguments594['identifier'] = 'actions-add';

$output589 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output589 .= '</a></th>
                                    <th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments596 = array();
$arguments596['key'] = NULL;
$arguments596['id'] = NULL;
$arguments596['default'] = NULL;
$arguments596['arguments'] = NULL;
$arguments596['extensionName'] = NULL;
$arguments596['languageKey'] = NULL;
$arguments596['alternativeLanguageKeys'] = NULL;
$arguments596['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext)]);

$output589 .= '</th>
                                    <th class="col-control nowrap"></th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['key'] = NULL;
$arguments598['id'] = NULL;
$arguments598['default'] = NULL;
$arguments598['arguments'] = NULL;
$arguments598['extensionName'] = NULL;
$arguments598['languageKey'] = NULL;
$arguments598['alternativeLanguageKeys'] = NULL;
$arguments598['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext)]);

$output589 .= '</th>
                                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['key'] = NULL;
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$arguments600['languageKey'] = NULL;
$arguments600['alternativeLanguageKeys'] = NULL;
$arguments600['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);

$output589 .= '</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
                                <tr>
                                    <td class="col-icon nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output629 = '';

$output629 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$output632 = '';

$output632 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['key'] = NULL;
$arguments633['id'] = NULL;
$arguments633['default'] = NULL;
$arguments633['arguments'] = NULL;
$arguments633['extensionName'] = NULL;
$arguments633['languageKey'] = NULL;
$arguments633['alternativeLanguageKeys'] = NULL;
$arguments633['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output632 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext)]);

$output632 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments635 = array();
$arguments635['identifier'] = NULL;
$arguments635['size'] = 'small';
$arguments635['overlay'] = NULL;
$arguments635['state'] = 'default';
$arguments635['alternativeMarkupIdentifier'] = NULL;
$arguments635['identifier'] = 'overlay-missing';

$output632 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$output632 .= '
                                                </span>
                                            ';
return $output632;
};
$arguments630 = array();

$output629 .= '';

$output629 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['key'] = NULL;
$arguments643['id'] = NULL;
$arguments643['default'] = NULL;
$arguments643['arguments'] = NULL;
$arguments643['extensionName'] = NULL;
$arguments643['languageKey'] = NULL;
$arguments643['alternativeLanguageKeys'] = NULL;
$arguments643['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output642 .= ' ';
$array645 = array (
);
$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array645)]);

$output642 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['identifier'] = NULL;
$arguments646['size'] = 'small';
$arguments646['overlay'] = NULL;
$arguments646['state'] = 'default';
$arguments646['alternativeMarkupIdentifier'] = NULL;
$arguments646['identifier'] = 'overlay-missing';

$output642 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output642 .= '
                                                </span>
                                            ';
return $output642;
};
$arguments637 = array();
$arguments637['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array639 = array();
$array640 = array (
);$array639['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array640);

$expression641 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments637['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression641(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array639)
					),
					$renderingContext
				);

$output629 .= '';

$output629 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
$output650 = '';

$output650 .= '
                                                <span title="id=';
$array651 = array (
);
$output650 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array651)]);

$output650 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments652 = array();
$arguments652['identifier'] = NULL;
$arguments652['size'] = 'small';
$arguments652['overlay'] = NULL;
$arguments652['state'] = 'default';
$arguments652['alternativeMarkupIdentifier'] = NULL;
$arguments652['identifier'] = 'content-form';

$output650 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);

$output650 .= '
                                                </span>
                                            ';
return $output650;
};
$arguments648 = array();
$arguments648['if'] = NULL;

$output629 .= '';

$output629 .= '
                                        ';
return $output629;
};
$arguments606 = array();
$arguments606['then'] = NULL;
$arguments606['else'] = NULL;
$arguments606['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array626 = array();
$array627 = array (
);$array626['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array627);

$expression628 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments606['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression628(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array626)
					),
					$renderingContext
				);
$arguments606['__thenClosure'] = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['key'] = NULL;
$arguments609['id'] = NULL;
$arguments609['default'] = NULL;
$arguments609['arguments'] = NULL;
$arguments609['extensionName'] = NULL;
$arguments609['languageKey'] = NULL;
$arguments609['alternativeLanguageKeys'] = NULL;
$arguments609['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext)]);

$output608 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments611 = array();
$arguments611['identifier'] = NULL;
$arguments611['size'] = 'small';
$arguments611['overlay'] = NULL;
$arguments611['state'] = 'default';
$arguments611['alternativeMarkupIdentifier'] = NULL;
$arguments611['identifier'] = 'overlay-missing';

$output608 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);

$output608 .= '
                                                </span>
                                            ';
return $output608;
};
$arguments606['__elseClosures'][] = function() use ($renderingContext, $self) {
$output613 = '';

$output613 .= '
                                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments614 = array();
$arguments614['key'] = NULL;
$arguments614['id'] = NULL;
$arguments614['default'] = NULL;
$arguments614['arguments'] = NULL;
$arguments614['extensionName'] = NULL;
$arguments614['languageKey'] = NULL;
$arguments614['alternativeLanguageKeys'] = NULL;
$arguments614['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext)]);

$output613 .= ' ';
$array616 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array616)]);

$output613 .= '" data-toggle="tooltip" data-placement="top">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['identifier'] = NULL;
$arguments617['size'] = 'small';
$arguments617['overlay'] = NULL;
$arguments617['state'] = 'default';
$arguments617['alternativeMarkupIdentifier'] = NULL;
$arguments617['identifier'] = 'overlay-missing';

$output613 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output613 .= '
                                                </span>
                                            ';
return $output613;
};
$arguments606['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array619 = array();
$array620 = array (
);$array619['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array620);

$expression621 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression621(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array619)
					),
					$renderingContext
				);
};
$arguments606['__elseClosures'][] = function() use ($renderingContext, $self) {
$output622 = '';

$output622 .= '
                                                <span title="id=';
$array623 = array (
);
$output622 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array623)]);

$output622 .= '" data-toggle="tooltip" data-placement="right">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['identifier'] = NULL;
$arguments624['size'] = 'small';
$arguments624['overlay'] = NULL;
$arguments624['state'] = 'default';
$arguments624['alternativeMarkupIdentifier'] = NULL;
$arguments624['identifier'] = 'content-form';

$output622 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output622 .= '
                                                </span>
                                            ';
return $output622;
};

$output605 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output605 .= '
                                    </td>
                                    <td class="col-title col-responsive nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output672 = '';

$output672 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
$output675 = '';

$output675 .= '
                                                    <div title="';
$array676 = array (
);
$output675 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array676)]);

$output675 .= '">';
$array677 = array (
);
$output675 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array677)]);

$output675 .= '</div>
                                                ';
return $output675;
};
$arguments673 = array();

$output672 .= '';

$output672 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
$array688 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array688)]);
};
$arguments681 = array();
$arguments681['additionalAttributes'] = NULL;
$arguments681['data'] = NULL;
$arguments681['class'] = NULL;
$arguments681['dir'] = NULL;
$arguments681['id'] = NULL;
$arguments681['lang'] = NULL;
$arguments681['style'] = NULL;
$arguments681['title'] = NULL;
$arguments681['accesskey'] = NULL;
$arguments681['tabindex'] = NULL;
$arguments681['onclick'] = NULL;
$arguments681['name'] = NULL;
$arguments681['rel'] = NULL;
$arguments681['rev'] = NULL;
$arguments681['target'] = NULL;
$arguments681['action'] = NULL;
$arguments681['controller'] = NULL;
$arguments681['extensionName'] = NULL;
$arguments681['pluginName'] = NULL;
$arguments681['pageUid'] = NULL;
$arguments681['pageType'] = NULL;
$arguments681['noCache'] = NULL;
$arguments681['noCacheHash'] = NULL;
$arguments681['section'] = NULL;
$arguments681['format'] = NULL;
$arguments681['linkAccessRestrictedPages'] = NULL;
$arguments681['additionalParams'] = NULL;
$arguments681['absolute'] = NULL;
$arguments681['addQueryString'] = NULL;
$arguments681['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments681['addQueryStringMethod'] = NULL;
$arguments681['arguments'] = NULL;
$arguments681['controller'] = 'FormEditor';
$arguments681['action'] = 'index';
// Rendering Array
$array683 = array();
$array684 = array (
);$array683['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array684);
$arguments681['arguments'] = $array683;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['key'] = NULL;
$arguments685['id'] = NULL;
$arguments685['default'] = NULL;
$arguments685['arguments'] = NULL;
$arguments685['extensionName'] = NULL;
$arguments685['languageKey'] = NULL;
$arguments685['alternativeLanguageKeys'] = NULL;
$arguments685['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments681['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);
// Rendering Array
$array687 = array();
$array687['toggle'] = 'tooltip';
$array687['placement'] = 'right';
$arguments681['data'] = $array687;

$output680 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output680 .= '
                                                ';
return $output680;
};
$arguments678 = array();
$arguments678['if'] = NULL;

$output672 .= '';

$output672 .= '
                                        ';
return $output672;
};
$arguments654 = array();
$arguments654['then'] = NULL;
$arguments654['else'] = NULL;
$arguments654['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array668 = array();
$array669 = array (
);$array668['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array669);
$array668['1'] = ' || ';
$array670 = array (
);$array668['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array670);

$expression671 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments654['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression671(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array668)
					),
					$renderingContext
				);
$arguments654['__thenClosure'] = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                                                    <div title="';
$array657 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array657)]);

$output656 .= '">';
$array658 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array658)]);

$output656 .= '</div>
                                                ';
return $output656;
};
$arguments654['__elseClosures'][] = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$array667 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array667)]);
};
$arguments660 = array();
$arguments660['additionalAttributes'] = NULL;
$arguments660['data'] = NULL;
$arguments660['class'] = NULL;
$arguments660['dir'] = NULL;
$arguments660['id'] = NULL;
$arguments660['lang'] = NULL;
$arguments660['style'] = NULL;
$arguments660['title'] = NULL;
$arguments660['accesskey'] = NULL;
$arguments660['tabindex'] = NULL;
$arguments660['onclick'] = NULL;
$arguments660['name'] = NULL;
$arguments660['rel'] = NULL;
$arguments660['rev'] = NULL;
$arguments660['target'] = NULL;
$arguments660['action'] = NULL;
$arguments660['controller'] = NULL;
$arguments660['extensionName'] = NULL;
$arguments660['pluginName'] = NULL;
$arguments660['pageUid'] = NULL;
$arguments660['pageType'] = NULL;
$arguments660['noCache'] = NULL;
$arguments660['noCacheHash'] = NULL;
$arguments660['section'] = NULL;
$arguments660['format'] = NULL;
$arguments660['linkAccessRestrictedPages'] = NULL;
$arguments660['additionalParams'] = NULL;
$arguments660['absolute'] = NULL;
$arguments660['addQueryString'] = NULL;
$arguments660['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments660['addQueryStringMethod'] = NULL;
$arguments660['arguments'] = NULL;
$arguments660['controller'] = 'FormEditor';
$arguments660['action'] = 'index';
// Rendering Array
$array662 = array();
$array663 = array (
);$array662['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array663);
$arguments660['arguments'] = $array662;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments664 = array();
$arguments664['key'] = NULL;
$arguments664['id'] = NULL;
$arguments664['default'] = NULL;
$arguments664['arguments'] = NULL;
$arguments664['extensionName'] = NULL;
$arguments664['languageKey'] = NULL;
$arguments664['alternativeLanguageKeys'] = NULL;
$arguments664['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments660['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);
// Rendering Array
$array666 = array();
$array666['toggle'] = 'tooltip';
$array666['placement'] = 'right';
$arguments660['data'] = $array666;

$output659 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output659 .= '
                                                ';
return $output659;
};

$output605 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output605 .= '
                                    </td>
                                    <td class="col-control nowrap">
                                        <div class="btn-group" role="group">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$output709 = '';

$output709 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
$output712 = '';

$output712 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['key'] = NULL;
$arguments713['id'] = NULL;
$arguments713['default'] = NULL;
$arguments713['arguments'] = NULL;
$arguments713['extensionName'] = NULL;
$arguments713['languageKey'] = NULL;
$arguments713['alternativeLanguageKeys'] = NULL;
$arguments713['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output712 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext)]);

$output712 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments715 = array();
$arguments715['identifier'] = NULL;
$arguments715['size'] = 'small';
$arguments715['overlay'] = NULL;
$arguments715['state'] = 'default';
$arguments715['alternativeMarkupIdentifier'] = NULL;
$arguments715['identifier'] = 'actions-open';

$output712 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments715, $renderChildrenClosure716, $renderingContext);

$output712 .= '</button>
                                                ';
return $output712;
};
$arguments710 = array();

$output709 .= '';

$output709 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
$output719 = '';

$output719 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['identifier'] = NULL;
$arguments726['size'] = 'small';
$arguments726['overlay'] = NULL;
$arguments726['state'] = 'default';
$arguments726['alternativeMarkupIdentifier'] = NULL;
$arguments726['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);
};
$arguments720 = array();
$arguments720['additionalAttributes'] = NULL;
$arguments720['data'] = NULL;
$arguments720['class'] = NULL;
$arguments720['dir'] = NULL;
$arguments720['id'] = NULL;
$arguments720['lang'] = NULL;
$arguments720['style'] = NULL;
$arguments720['title'] = NULL;
$arguments720['accesskey'] = NULL;
$arguments720['tabindex'] = NULL;
$arguments720['onclick'] = NULL;
$arguments720['name'] = NULL;
$arguments720['rel'] = NULL;
$arguments720['rev'] = NULL;
$arguments720['target'] = NULL;
$arguments720['action'] = NULL;
$arguments720['controller'] = NULL;
$arguments720['extensionName'] = NULL;
$arguments720['pluginName'] = NULL;
$arguments720['pageUid'] = NULL;
$arguments720['pageType'] = NULL;
$arguments720['noCache'] = NULL;
$arguments720['noCacheHash'] = NULL;
$arguments720['section'] = NULL;
$arguments720['format'] = NULL;
$arguments720['linkAccessRestrictedPages'] = NULL;
$arguments720['additionalParams'] = NULL;
$arguments720['absolute'] = NULL;
$arguments720['addQueryString'] = NULL;
$arguments720['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments720['addQueryStringMethod'] = NULL;
$arguments720['arguments'] = NULL;
$arguments720['controller'] = 'FormEditor';
$arguments720['action'] = 'index';
// Rendering Array
$array722 = array();
$array723 = array (
);$array722['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array723);
$arguments720['arguments'] = $array722;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['key'] = NULL;
$arguments724['id'] = NULL;
$arguments724['default'] = NULL;
$arguments724['arguments'] = NULL;
$arguments724['extensionName'] = NULL;
$arguments724['languageKey'] = NULL;
$arguments724['alternativeLanguageKeys'] = NULL;
$arguments724['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments720['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext);
$arguments720['class'] = 'btn btn-default form-record-open';

$output719 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments720, $renderChildrenClosure721, $renderingContext);

$output719 .= '
                                                ';
return $output719;
};
$arguments717 = array();
$arguments717['if'] = NULL;

$output709 .= '';

$output709 .= '
                                            ';
return $output709;
};
$arguments689 = array();
$arguments689['then'] = NULL;
$arguments689['else'] = NULL;
$arguments689['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array705 = array();
$array706 = array (
);$array705['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array706);
$array705['1'] = ' || ';
$array707 = array (
);$array705['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array707);

$expression708 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments689['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression708(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array705)
					),
					$renderingContext
				);
$arguments689['__thenClosure'] = function() use ($renderingContext, $self) {
$output691 = '';

$output691 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments692 = array();
$arguments692['key'] = NULL;
$arguments692['id'] = NULL;
$arguments692['default'] = NULL;
$arguments692['arguments'] = NULL;
$arguments692['extensionName'] = NULL;
$arguments692['languageKey'] = NULL;
$arguments692['alternativeLanguageKeys'] = NULL;
$arguments692['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output691 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext)]);

$output691 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments694 = array();
$arguments694['identifier'] = NULL;
$arguments694['size'] = 'small';
$arguments694['overlay'] = NULL;
$arguments694['state'] = 'default';
$arguments694['alternativeMarkupIdentifier'] = NULL;
$arguments694['identifier'] = 'actions-open';

$output691 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext);

$output691 .= '</button>
                                                ';
return $output691;
};
$arguments689['__elseClosures'][] = function() use ($renderingContext, $self) {
$output696 = '';

$output696 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure704 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments703 = array();
$arguments703['identifier'] = NULL;
$arguments703['size'] = 'small';
$arguments703['overlay'] = NULL;
$arguments703['state'] = 'default';
$arguments703['alternativeMarkupIdentifier'] = NULL;
$arguments703['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments703, $renderChildrenClosure704, $renderingContext);
};
$arguments697 = array();
$arguments697['additionalAttributes'] = NULL;
$arguments697['data'] = NULL;
$arguments697['class'] = NULL;
$arguments697['dir'] = NULL;
$arguments697['id'] = NULL;
$arguments697['lang'] = NULL;
$arguments697['style'] = NULL;
$arguments697['title'] = NULL;
$arguments697['accesskey'] = NULL;
$arguments697['tabindex'] = NULL;
$arguments697['onclick'] = NULL;
$arguments697['name'] = NULL;
$arguments697['rel'] = NULL;
$arguments697['rev'] = NULL;
$arguments697['target'] = NULL;
$arguments697['action'] = NULL;
$arguments697['controller'] = NULL;
$arguments697['extensionName'] = NULL;
$arguments697['pluginName'] = NULL;
$arguments697['pageUid'] = NULL;
$arguments697['pageType'] = NULL;
$arguments697['noCache'] = NULL;
$arguments697['noCacheHash'] = NULL;
$arguments697['section'] = NULL;
$arguments697['format'] = NULL;
$arguments697['linkAccessRestrictedPages'] = NULL;
$arguments697['additionalParams'] = NULL;
$arguments697['absolute'] = NULL;
$arguments697['addQueryString'] = NULL;
$arguments697['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments697['addQueryStringMethod'] = NULL;
$arguments697['arguments'] = NULL;
$arguments697['controller'] = 'FormEditor';
$arguments697['action'] = 'index';
// Rendering Array
$array699 = array();
$array700 = array (
);$array699['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array700);
$arguments697['arguments'] = $array699;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments701 = array();
$arguments701['key'] = NULL;
$arguments701['id'] = NULL;
$arguments701['default'] = NULL;
$arguments701['arguments'] = NULL;
$arguments701['extensionName'] = NULL;
$arguments701['languageKey'] = NULL;
$arguments701['alternativeLanguageKeys'] = NULL;
$arguments701['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments697['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);
$arguments697['class'] = 'btn btn-default form-record-open';

$output696 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output696 .= '
                                                ';
return $output696;
};

$output605 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output605 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
$output781 = '';

$output781 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
$output784 = '';

$output784 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments785 = array();
$arguments785['key'] = NULL;
$arguments785['id'] = NULL;
$arguments785['default'] = NULL;
$arguments785['arguments'] = NULL;
$arguments785['extensionName'] = NULL;
$arguments785['languageKey'] = NULL;
$arguments785['alternativeLanguageKeys'] = NULL;
$arguments785['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output784 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext)]);

$output784 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments787 = array();
$arguments787['identifier'] = NULL;
$arguments787['size'] = 'small';
$arguments787['overlay'] = NULL;
$arguments787['state'] = 'default';
$arguments787['alternativeMarkupIdentifier'] = NULL;
$arguments787['identifier'] = 'actions-duplicate';

$output784 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output784 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure790 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments789 = array();
$arguments789['key'] = NULL;
$arguments789['id'] = NULL;
$arguments789['default'] = NULL;
$arguments789['arguments'] = NULL;
$arguments789['extensionName'] = NULL;
$arguments789['languageKey'] = NULL;
$arguments789['alternativeLanguageKeys'] = NULL;
$arguments789['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output784 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments789, $renderChildrenClosure790, $renderingContext)]);

$output784 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments791 = array();
$arguments791['identifier'] = NULL;
$arguments791['size'] = 'small';
$arguments791['overlay'] = NULL;
$arguments791['state'] = 'default';
$arguments791['alternativeMarkupIdentifier'] = NULL;
$arguments791['identifier'] = 'actions-edit-delete';

$output784 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments791, $renderChildrenClosure792, $renderingContext);

$output784 .= '</button>
                                                ';
return $output784;
};
$arguments782 = array();

$output781 .= '';

$output781 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure794 = function() use ($renderingContext, $self) {
$output795 = '';

$output795 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array796 = array (
);
$output795 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array796)]);

$output795 .= '" data-form-name="';
$array797 = array (
);
$output795 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array797)]);

$output795 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure799 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments798 = array();
$arguments798['key'] = NULL;
$arguments798['id'] = NULL;
$arguments798['default'] = NULL;
$arguments798['arguments'] = NULL;
$arguments798['extensionName'] = NULL;
$arguments798['languageKey'] = NULL;
$arguments798['alternativeLanguageKeys'] = NULL;
$arguments798['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output795 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments798, $renderChildrenClosure799, $renderingContext)]);

$output795 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure801 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments800 = array();
$arguments800['identifier'] = NULL;
$arguments800['size'] = 'small';
$arguments800['overlay'] = NULL;
$arguments800['state'] = 'default';
$arguments800['alternativeMarkupIdentifier'] = NULL;
$arguments800['identifier'] = 'actions-duplicate';

$output795 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments800, $renderChildrenClosure801, $renderingContext);

$output795 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
$output818 = '';

$output818 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure820 = function() use ($renderingContext, $self) {
$output821 = '';

$output821 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array822 = array (
);
$output821 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array822)]);

$output821 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure824 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments823 = array();
$arguments823['key'] = NULL;
$arguments823['id'] = NULL;
$arguments823['default'] = NULL;
$arguments823['arguments'] = NULL;
$arguments823['extensionName'] = NULL;
$arguments823['languageKey'] = NULL;
$arguments823['alternativeLanguageKeys'] = NULL;
$arguments823['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output821 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments823, $renderChildrenClosure824, $renderingContext)]);

$output821 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments825 = array();
$arguments825['identifier'] = NULL;
$arguments825['size'] = 'small';
$arguments825['overlay'] = NULL;
$arguments825['state'] = 'default';
$arguments825['alternativeMarkupIdentifier'] = NULL;
$arguments825['identifier'] = 'actions-edit-delete';

$output821 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments825, $renderChildrenClosure826, $renderingContext);

$output821 .= '</a>
                                                        ';
return $output821;
};
$arguments819 = array();

$output818 .= '';

$output818 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure828 = function() use ($renderingContext, $self) {
$output829 = '';

$output829 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments830 = array();
$arguments830['key'] = NULL;
$arguments830['id'] = NULL;
$arguments830['default'] = NULL;
$arguments830['arguments'] = NULL;
$arguments830['extensionName'] = NULL;
$arguments830['languageKey'] = NULL;
$arguments830['alternativeLanguageKeys'] = NULL;
$arguments830['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output829 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext)]);

$output829 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments832 = array();
$arguments832['identifier'] = NULL;
$arguments832['size'] = 'small';
$arguments832['overlay'] = NULL;
$arguments832['state'] = 'default';
$arguments832['alternativeMarkupIdentifier'] = NULL;
$arguments832['identifier'] = 'actions-edit-delete';

$output829 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext);

$output829 .= '</button>
                                                        ';
return $output829;
};
$arguments827 = array();
$arguments827['if'] = NULL;

$output818 .= '';

$output818 .= '
                                                    ';
return $output818;
};
$arguments802 = array();
$arguments802['then'] = NULL;
$arguments802['else'] = NULL;
$arguments802['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array815 = array();
$array816 = array (
);$array815['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array816);

$expression817 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments802['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression817(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array815)
					),
					$renderingContext
				);
$arguments802['__thenClosure'] = function() use ($renderingContext, $self) {
$output804 = '';

$output804 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array805 = array (
);
$output804 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array805)]);

$output804 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure807 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments806 = array();
$arguments806['key'] = NULL;
$arguments806['id'] = NULL;
$arguments806['default'] = NULL;
$arguments806['arguments'] = NULL;
$arguments806['extensionName'] = NULL;
$arguments806['languageKey'] = NULL;
$arguments806['alternativeLanguageKeys'] = NULL;
$arguments806['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output804 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments806, $renderChildrenClosure807, $renderingContext)]);

$output804 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments808 = array();
$arguments808['identifier'] = NULL;
$arguments808['size'] = 'small';
$arguments808['overlay'] = NULL;
$arguments808['state'] = 'default';
$arguments808['alternativeMarkupIdentifier'] = NULL;
$arguments808['identifier'] = 'actions-edit-delete';

$output804 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments808, $renderChildrenClosure809, $renderingContext);

$output804 .= '</a>
                                                        ';
return $output804;
};
$arguments802['__elseClosures'][] = function() use ($renderingContext, $self) {
$output810 = '';

$output810 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure812 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments811 = array();
$arguments811['key'] = NULL;
$arguments811['id'] = NULL;
$arguments811['default'] = NULL;
$arguments811['arguments'] = NULL;
$arguments811['extensionName'] = NULL;
$arguments811['languageKey'] = NULL;
$arguments811['alternativeLanguageKeys'] = NULL;
$arguments811['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output810 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments811, $renderChildrenClosure812, $renderingContext)]);

$output810 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure814 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments813 = array();
$arguments813['identifier'] = NULL;
$arguments813['size'] = 'small';
$arguments813['overlay'] = NULL;
$arguments813['state'] = 'default';
$arguments813['alternativeMarkupIdentifier'] = NULL;
$arguments813['identifier'] = 'actions-edit-delete';

$output810 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments813, $renderChildrenClosure814, $renderingContext);

$output810 .= '</button>
                                                        ';
return $output810;
};

$output795 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext);

$output795 .= '
                                                ';
return $output795;
};
$arguments793 = array();
$arguments793['if'] = NULL;

$output781 .= '';

$output781 .= '
                                            ';
return $output781;
};
$arguments728 = array();
$arguments728['then'] = NULL;
$arguments728['else'] = NULL;
$arguments728['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array778 = array();
$array779 = array (
);$array778['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array779);

$expression780 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments728['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression780(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array778)
					),
					$renderingContext
				);
$arguments728['__thenClosure'] = function() use ($renderingContext, $self) {
$output730 = '';

$output730 .= '
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure732 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments731 = array();
$arguments731['key'] = NULL;
$arguments731['id'] = NULL;
$arguments731['default'] = NULL;
$arguments731['arguments'] = NULL;
$arguments731['extensionName'] = NULL;
$arguments731['languageKey'] = NULL;
$arguments731['alternativeLanguageKeys'] = NULL;
$arguments731['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output730 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments731, $renderChildrenClosure732, $renderingContext)]);

$output730 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['identifier'] = NULL;
$arguments733['size'] = 'small';
$arguments733['overlay'] = NULL;
$arguments733['state'] = 'default';
$arguments733['alternativeMarkupIdentifier'] = NULL;
$arguments733['identifier'] = 'actions-duplicate';

$output730 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);

$output730 .= '</button>
                                                    <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['key'] = NULL;
$arguments735['id'] = NULL;
$arguments735['default'] = NULL;
$arguments735['arguments'] = NULL;
$arguments735['extensionName'] = NULL;
$arguments735['languageKey'] = NULL;
$arguments735['alternativeLanguageKeys'] = NULL;
$arguments735['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output730 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext)]);

$output730 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure738 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments737 = array();
$arguments737['identifier'] = NULL;
$arguments737['size'] = 'small';
$arguments737['overlay'] = NULL;
$arguments737['state'] = 'default';
$arguments737['alternativeMarkupIdentifier'] = NULL;
$arguments737['identifier'] = 'actions-edit-delete';

$output730 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments737, $renderChildrenClosure738, $renderingContext);

$output730 .= '</button>
                                                ';
return $output730;
};
$arguments728['__elseClosures'][] = function() use ($renderingContext, $self) {
$output739 = '';

$output739 .= '
                                                    <a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array740 = array (
);
$output739 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array740)]);

$output739 .= '" data-form-name="';
$array741 = array (
);
$output739 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array741)]);

$output739 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure743 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments742 = array();
$arguments742['key'] = NULL;
$arguments742['id'] = NULL;
$arguments742['default'] = NULL;
$arguments742['arguments'] = NULL;
$arguments742['extensionName'] = NULL;
$arguments742['languageKey'] = NULL;
$arguments742['alternativeLanguageKeys'] = NULL;
$arguments742['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output739 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments742, $renderChildrenClosure743, $renderingContext)]);

$output739 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure745 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments744 = array();
$arguments744['identifier'] = NULL;
$arguments744['size'] = 'small';
$arguments744['overlay'] = NULL;
$arguments744['state'] = 'default';
$arguments744['alternativeMarkupIdentifier'] = NULL;
$arguments744['identifier'] = 'actions-duplicate';

$output739 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments744, $renderChildrenClosure745, $renderingContext);

$output739 .= '</a>
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
$output762 = '';

$output762 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array766 = array (
);
$output765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array766)]);

$output765 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['key'] = NULL;
$arguments767['id'] = NULL;
$arguments767['default'] = NULL;
$arguments767['arguments'] = NULL;
$arguments767['extensionName'] = NULL;
$arguments767['languageKey'] = NULL;
$arguments767['alternativeLanguageKeys'] = NULL;
$arguments767['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext)]);

$output765 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments769 = array();
$arguments769['identifier'] = NULL;
$arguments769['size'] = 'small';
$arguments769['overlay'] = NULL;
$arguments769['state'] = 'default';
$arguments769['alternativeMarkupIdentifier'] = NULL;
$arguments769['identifier'] = 'actions-edit-delete';

$output765 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments769, $renderChildrenClosure770, $renderingContext);

$output765 .= '</a>
                                                        ';
return $output765;
};
$arguments763 = array();

$output762 .= '';

$output762 .= '
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure772 = function() use ($renderingContext, $self) {
$output773 = '';

$output773 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments774 = array();
$arguments774['key'] = NULL;
$arguments774['id'] = NULL;
$arguments774['default'] = NULL;
$arguments774['arguments'] = NULL;
$arguments774['extensionName'] = NULL;
$arguments774['languageKey'] = NULL;
$arguments774['alternativeLanguageKeys'] = NULL;
$arguments774['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output773 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext)]);

$output773 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure777 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments776 = array();
$arguments776['identifier'] = NULL;
$arguments776['size'] = 'small';
$arguments776['overlay'] = NULL;
$arguments776['state'] = 'default';
$arguments776['alternativeMarkupIdentifier'] = NULL;
$arguments776['identifier'] = 'actions-edit-delete';

$output773 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext);

$output773 .= '</button>
                                                        ';
return $output773;
};
$arguments771 = array();
$arguments771['if'] = NULL;

$output762 .= '';

$output762 .= '
                                                    ';
return $output762;
};
$arguments746 = array();
$arguments746['then'] = NULL;
$arguments746['else'] = NULL;
$arguments746['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array759 = array();
$array760 = array (
);$array759['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array760);

$expression761 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments746['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression761(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array759)
					),
					$renderingContext
				);
$arguments746['__thenClosure'] = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
                                                            <a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array749 = array (
);
$output748 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array749)]);

$output748 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments750 = array();
$arguments750['key'] = NULL;
$arguments750['id'] = NULL;
$arguments750['default'] = NULL;
$arguments750['arguments'] = NULL;
$arguments750['extensionName'] = NULL;
$arguments750['languageKey'] = NULL;
$arguments750['alternativeLanguageKeys'] = NULL;
$arguments750['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output748 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext)]);

$output748 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments752 = array();
$arguments752['identifier'] = NULL;
$arguments752['size'] = 'small';
$arguments752['overlay'] = NULL;
$arguments752['state'] = 'default';
$arguments752['alternativeMarkupIdentifier'] = NULL;
$arguments752['identifier'] = 'actions-edit-delete';

$output748 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);

$output748 .= '</a>
                                                        ';
return $output748;
};
$arguments746['__elseClosures'][] = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
                                                            <button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments755 = array();
$arguments755['key'] = NULL;
$arguments755['id'] = NULL;
$arguments755['default'] = NULL;
$arguments755['arguments'] = NULL;
$arguments755['extensionName'] = NULL;
$arguments755['languageKey'] = NULL;
$arguments755['alternativeLanguageKeys'] = NULL;
$arguments755['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output754 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext)]);

$output754 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure758 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments757 = array();
$arguments757['identifier'] = NULL;
$arguments757['size'] = 'small';
$arguments757['overlay'] = NULL;
$arguments757['state'] = 'default';
$arguments757['alternativeMarkupIdentifier'] = NULL;
$arguments757['identifier'] = 'actions-edit-delete';

$output754 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments757, $renderChildrenClosure758, $renderingContext);

$output754 .= '</button>
                                                        ';
return $output754;
};

$output739 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext);

$output739 .= '
                                                ';
return $output739;
};

$output605 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output605 .= '
                                        </div>
                                    </td>
                                    <td class="nowrap">';
$array834 = array (
);
$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array834)]);

$output605 .= '</td>
                                    <td class="nowrap">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure836 = function() use ($renderingContext, $self) {
$output846 = '';

$output846 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure848 = function() use ($renderingContext, $self) {
$output849 = '';

$output849 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array850 = array (
);
$output849 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array850)]);

$output849 .= '" data-form-name="';
$array851 = array (
);
$output849 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array851)]);

$output849 .= '">';
$array852 = array (
);
$output849 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array852)]);

$output849 .= '</a>
                                            ';
return $output849;
};
$arguments847 = array();

$output846 .= '';

$output846 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure854 = function() use ($renderingContext, $self) {
$output855 = '';

$output855 .= '
                                                ';
$array856 = array (
);
$output855 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array856)]);

$output855 .= '
                                            ';
return $output855;
};
$arguments853 = array();
$arguments853['if'] = NULL;

$output846 .= '';

$output846 .= '
                                        ';
return $output846;
};
$arguments835 = array();
$arguments835['then'] = NULL;
$arguments835['else'] = NULL;
$arguments835['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array843 = array();
$array844 = array (
);$array843['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array844);

$expression845 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments835['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression845(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array843)
					),
					$renderingContext
				);
$arguments835['__thenClosure'] = function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '
                                                <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array838 = array (
);
$output837 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array838)]);

$output837 .= '" data-form-name="';
$array839 = array (
);
$output837 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array839)]);

$output837 .= '">';
$array840 = array (
);
$output837 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array840)]);

$output837 .= '</a>
                                            ';
return $output837;
};
$arguments835['__elseClosures'][] = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
                                                ';
$array842 = array (
);
$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array842)]);

$output841 .= '
                                            ';
return $output841;
};

$output605 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments835, $renderChildrenClosure836, $renderingContext);

$output605 .= '
                                    </td>
                                </tr>
                            ';
return $output605;
};
$arguments602 = array();
$arguments602['each'] = NULL;
$arguments602['as'] = NULL;
$arguments602['key'] = NULL;
$arguments602['reverse'] = false;
$arguments602['iteration'] = NULL;
$array604 = array (
);$arguments602['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array604);
$arguments602['as'] = 'form';

$output589 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output589 .= '
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ';
return $output589;
};
$arguments587['__elseClosures'][] = function() use ($renderingContext, $self) {
$output857 = '';

$output857 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure859 = function() use ($renderingContext, $self) {
$output862 = '';

$output862 .= '
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure864 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments863 = array();
$arguments863['key'] = NULL;
$arguments863['id'] = NULL;
$arguments863['default'] = NULL;
$arguments863['arguments'] = NULL;
$arguments863['extensionName'] = NULL;
$arguments863['languageKey'] = NULL;
$arguments863['alternativeLanguageKeys'] = NULL;
$arguments863['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message';

$output862 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments863, $renderChildrenClosure864, $renderingContext)]);

$output862 .= '</p>
            <a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments865 = array();
$arguments865['key'] = NULL;
$arguments865['id'] = NULL;
$arguments865['default'] = NULL;
$arguments865['arguments'] = NULL;
$arguments865['extensionName'] = NULL;
$arguments865['languageKey'] = NULL;
$arguments865['alternativeLanguageKeys'] = NULL;
$arguments865['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output862 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext)]);

$output862 .= '</a>
        ';
return $output862;
};
$arguments858 = array();
$arguments858['message'] = NULL;
$arguments858['title'] = NULL;
$arguments858['state'] = -2;
$arguments858['iconName'] = NULL;
$arguments858['disableIcon'] = false;
$arguments858['state'] = -1;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments860 = array();
$arguments860['key'] = NULL;
$arguments860['id'] = NULL;
$arguments860['default'] = NULL;
$arguments860['arguments'] = NULL;
$arguments860['extensionName'] = NULL;
$arguments860['languageKey'] = NULL;
$arguments860['alternativeLanguageKeys'] = NULL;
$arguments860['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title';
$arguments858['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments860, $renderChildrenClosure861, $renderingContext);
$renderChildrenClosure859 = ($arguments858['message'] !== null) ? function() use ($arguments858) { return $arguments858['message']; } : $renderChildrenClosure859;
$output857 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments858, $renderChildrenClosure859, $renderingContext);

$output857 .= '
    ';
return $output857;
};

$output579 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output579 .= '

';
return $output579;
};
$arguments577 = array();
$arguments577['name'] = NULL;
$arguments577['name'] = 'MainContent';

$output574 .= NULL;

$output574 .= '

';

return $output574;
}


}
#