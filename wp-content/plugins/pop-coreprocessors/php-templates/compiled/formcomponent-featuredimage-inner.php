<?php
 function lcr59cd19d1da7e7hbbch($cx, $ch, $vars, &$_this, $inverted, $cb, $else = null) {
  $options = array(
   'name' => $ch,
   'hash' => $vars[1],
   'contexts' => count($cx['scopes']) ? $cx['scopes'] : array(null),
   'fn.blockParams' => 0,
   '_this' => &$_this,
  );

  if ($cx['flags']['spvar']) {
   $options['data'] = $cx['sp_vars'];
  }

  if (isset($vars[2])) {
   $options['fn.blockParams'] = count($vars[2]);
  }

  // $invert the logic
  if ($inverted) {
   $tmp = $else;
   $else = $cb;
   $cb = $tmp;
  }

  $options['fn'] = function ($context = '_NO_INPUT_HERE_', $data = null) use ($cx, &$_this, $cb, $options, $vars) {
   if ($cx['flags']['echo']) {
    ob_start();
   }
   if (isset($data['data'])) {
    $old_spvar = $cx['sp_vars'];
    $cx['sp_vars'] = array_merge(array('root' => $old_spvar['root']), $data['data'], array('_parent' => $old_spvar));
   }
   $ex = false;
   if (isset($data['blockParams']) && isset($vars[2])) {
    $ex = array_combine($vars[2], array_slice($data['blockParams'], 0, count($vars[2])));
    array_unshift($cx['blparam'], $ex);
   } else if (isset($cx['blparam'][0])) {
    $ex = $cx['blparam'][0];
   }
   if (($context === '_NO_INPUT_HERE_') || ($context === $_this)) {
    $ret = $cb($cx, is_array($ex) ? lcr59cd19d1da7e7m($cx, $_this, $ex) : $_this);
   } else {
    $cx['scopes'][] = $_this;
    $ret = $cb($cx, is_array($ex) ? lcr59cd19d1da7e7m($cx, $context, $ex) : $context);
    array_pop($cx['scopes']);
   }
   if (isset($data['data'])) {
    $cx['sp_vars'] = $old_spvar;
   }
   return $cx['flags']['echo'] ? ob_get_clean() : $ret;
  };

  if ($else) {
   $options['inverse'] = function ($context = '_NO_INPUT_HERE_') use ($cx, $_this, $else) {
    if ($cx['flags']['echo']) {
     ob_start();
    }
    if ($context === '_NO_INPUT_HERE_') {
     $ret = $else($cx, $_this);
    } else {
     $cx['scopes'][] = $_this;
     $ret = $else($cx, $context);
     array_pop($cx['scopes']);
    }
    return $cx['flags']['echo'] ? ob_get_clean() : $ret;
   };
  } else {
   $options['inverse'] = function () {
    return '';
   };
  }

  return lcr59cd19d1da7e7exch($cx, $ch, $vars, $options);
 }

 function lcr59cd19d1da7e7encq($cx, $var) {
  if ($var instanceof LS) {
   return (string)$var;
  }

  return str_replace(array('=', '`', '&#039;'), array('&#x3D;', '&#x60;', '&#x27;'), htmlspecialchars(lcr59cd19d1da7e7raw($cx, $var), ENT_QUOTES, 'UTF-8'));
 }

 function lcr59cd19d1da7e7ifvar($cx, $v, $zero) {
  return ($v !== null) && ($v !== false) && ($zero || ($v !== 0) && ($v !== 0.0)) && ($v !== '') && (is_array($v) ? (count($v) > 0) : true);
 }

 function lcr59cd19d1da7e7raw($cx, $v, $ex = 0) {
  if ($ex) {
   return $v;
  }

  if ($v === true) {
   if ($cx['flags']['jstrue']) {
    return 'true';
   }
  }

  if (($v === false)) {
   if ($cx['flags']['jstrue']) {
    return 'false';
   }
  }

  if (is_array($v)) {
   if ($cx['flags']['jsobj']) {
    if (count(array_diff_key($v, array_keys(array_keys($v)))) > 0) {
     return '[object Object]';
    } else {
     $ret = array();
     foreach ($v as $k => $vv) {
      $ret[] = lcr59cd19d1da7e7raw($cx, $vv);
     }
     return join(',', $ret);
    }
   } else {
    return 'Array';
   }
  }

  return "$v";
 }

 function lcr59cd19d1da7e7hbch($cx, $ch, $vars, $op, &$_this) {
  if (isset($cx['blparam'][0][$ch])) {
   return $cx['blparam'][0][$ch];
  }

  $options = array(
   'name' => $ch,
   'hash' => $vars[1],
   'contexts' => count($cx['scopes']) ? $cx['scopes'] : array(null),
   'fn.blockParams' => 0,
   '_this' => &$_this
  );

  if ($cx['flags']['spvar']) {
   $options['data'] = $cx['sp_vars'];
  }

  return lcr59cd19d1da7e7exch($cx, $ch, $vars, $options);
 }

 function lcr59cd19d1da7e7m($cx, $a, $b) {
  if (is_array($b)) {
   if ($a === null) {
    return $b;
   } else if (is_array($a)) {
    return array_merge($a, $b);
   } else if (($cx['flags']['method'] || $cx['flags']['prop']) && is_object($a)) {
    foreach ($b as $i => $v) {
     $a->$i = $v;
    }
   }
  }
  return $a;
 }

 function lcr59cd19d1da7e7exch($cx, $ch, $vars, &$options) {
  $args = $vars[0];
  $args[] = $options;
  $e = null;
  $r = true;

  try {
   $r = call_user_func_array($cx['helpers'][$ch], $args);
  } catch (\Exception $E) {
   $e = "Runtime: call custom helper '$ch' error: " . $E->getMessage();
  }

  if($e !== null) {
   lcr59cd19d1da7e7err($cx, $e);
  }

  return $r;
 }

 function lcr59cd19d1da7e7err($cx, $err) {
  if ($cx['flags']['debug'] & $cx['constants']['DEBUG_ERROR_LOG']) {
   error_log($err);
   return;
  }
  if ($cx['flags']['debug'] & $cx['constants']['DEBUG_ERROR_EXCEPTION']) {
   throw new \Exception($err);
  }
 }

if (!class_exists("LS")) {
class LS {
 public static $jsContext = array (
  'flags' => 
  array (
    'jstrue' => 1,
    'jsobj' => 1,
  ),
);
    public function __construct($str, $escape = false) {
        $this->string = $escape ? (($escape === 'encq') ? static::encq(static::$jsContext, $str) : static::enc(static::$jsContext, $str)) : $str;
    }
    public function __toString() {
        return $this->string;
    }
    public static function stripExtendedComments($template) {
        return preg_replace(static::EXTENDED_COMMENT_SEARCH, '{{! }}', $template);
    }
    public static function escapeTemplate($template) {
        return addcslashes(addcslashes($template, '\\'), "'");
    }
    public static function raw($cx, $v, $ex = 0) {
        if ($ex) {
            return $v;
        }

        if ($v === true) {
            if ($cx['flags']['jstrue']) {
                return 'true';
            }
        }

        if (($v === false)) {
            if ($cx['flags']['jstrue']) {
                return 'false';
            }
        }

        if (is_array($v)) {
            if ($cx['flags']['jsobj']) {
                if (count(array_diff_key($v, array_keys(array_keys($v)))) > 0) {
                    return '[object Object]';
                } else {
                    $ret = array();
                    foreach ($v as $k => $vv) {
                        $ret[] = static::raw($cx, $vv);
                    }
                    return join(',', $ret);
                }
            } else {
                return 'Array';
            }
        }

        return "$v";
    }
    public static function enc($cx, $var) {
        return htmlspecialchars(static::raw($cx, $var), ENT_QUOTES, 'UTF-8');
    }
    public static function encq($cx, $var) {
        return str_replace(array('=', '`', '&#039;'), array('&#x3D;', '&#x60;', '&#x27;'), htmlspecialchars(static::raw($cx, $var), ENT_QUOTES, 'UTF-8'));
    }
}
}
return function ($in = null, $options = null) {
    $helpers = array(            'generateId' => function($options) { 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->generateId($options);
	},
            'lastGeneratedId' => function($options) { 

		global $pop_serverside_helpers;
		return $pop_serverside_helpers->lastGeneratedId($options);
	},
);
    $partials = array();
    $cx = array(
        'flags' => array(
            'jstrue' => true,
            'jsobj' => true,
            'jslen' => true,
            'spvar' => true,
            'prop' => false,
            'method' => false,
            'lambda' => false,
            'mustlok' => false,
            'mustlam' => false,
            'echo' => true,
            'partnc' => false,
            'knohlp' => false,
            'debug' => isset($options['debug']) ? $options['debug'] : 1,
        ),
        'constants' =>  array(
            'DEBUG_ERROR_LOG' => 1,
            'DEBUG_ERROR_EXCEPTION' => 2,
            'DEBUG_TAGS' => 4,
            'DEBUG_TAGS_ANSI' => 12,
            'DEBUG_TAGS_HTML' => 20,
        ),
        'helpers' => isset($options['helpers']) ? array_merge($helpers, $options['helpers']) : $helpers,
        'partials' => isset($options['partials']) ? array_merge($partials, $options['partials']) : $partials,
        'scopes' => array(),
        'sp_vars' => isset($options['data']) ? array_merge(array('root' => $in), $options['data']) : array('root' => $in),
        'blparam' => array(),
        'partialid' => 0,
        'runtime' => '\LightnCandy\Runtime',
    );
    
    $inary=is_array($in);
    ob_start();echo '<div class="featuredimage-container pull-left" ',lcr59cd19d1da7e7hbbch($cx, 'generateId', array(array(),array()), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['id'])) ? $in['id'] : null)),'';}),'>
	<a ',lcr59cd19d1da7e7hbbch($cx, 'generateId', array(array(),array('group'=>'set')), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['id'])) ? $in['id'] : null)),'';}),' href="#" class="visible-loggedin-',lcr59cd19d1da7e7encq($cx, ((isset($in['tls']) && is_array($in['tls']) && isset($in['tls']['domain-id'])) ? $in['tls']['domain-id'] : null)),'">
';if (lcr59cd19d1da7e7ifvar($cx, (($inary && isset($in['value'])) ? $in['value'] : null), false)){echo '			<img src="',lcr59cd19d1da7e7encq($cx, ((isset($in['img']) && is_array($in['img']) && isset($in['img']['src'])) ? $in['img']['src'] : null)),'" width="',lcr59cd19d1da7e7encq($cx, ((isset($in['img']) && is_array($in['img']) && isset($in['img']['width'])) ? $in['img']['width'] : null)),'" height="',lcr59cd19d1da7e7encq($cx, ((isset($in['img']) && is_array($in['img']) && isset($in['img']['height'])) ? $in['img']['height'] : null)),'" class="',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['img'])) ? $in['classes']['img'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['img'])) ? $in['styles']['img'] : null)),'">
';}else{echo '			<img src="',lcr59cd19d1da7e7encq($cx, ((isset($in['default-img']) && is_array($in['default-img']) && isset($in['default-img']['src'])) ? $in['default-img']['src'] : null)),'" width="',lcr59cd19d1da7e7encq($cx, ((isset($in['default-img']) && is_array($in['default-img']) && isset($in['default-img']['width'])) ? $in['default-img']['width'] : null)),'" height="',lcr59cd19d1da7e7encq($cx, ((isset($in['default-img']) && is_array($in['default-img']) && isset($in['default-img']['height'])) ? $in['default-img']['height'] : null)),'" class="',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['img'])) ? $in['classes']['img'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['img'])) ? $in['styles']['img'] : null)),'">
';}echo '	</a>
	<span class="visible-notloggedin-',lcr59cd19d1da7e7encq($cx, ((isset($in['tls']) && is_array($in['tls']) && isset($in['tls']['domain-id'])) ? $in['tls']['domain-id'] : null)),'">
';if (lcr59cd19d1da7e7ifvar($cx, (($inary && isset($in['value'])) ? $in['value'] : null), false)){echo '			<img src="',lcr59cd19d1da7e7encq($cx, ((isset($in['img']) && is_array($in['img']) && isset($in['img']['src'])) ? $in['img']['src'] : null)),'" width="',lcr59cd19d1da7e7encq($cx, ((isset($in['img']) && is_array($in['img']) && isset($in['img']['width'])) ? $in['img']['width'] : null)),'" height="',lcr59cd19d1da7e7encq($cx, ((isset($in['img']) && is_array($in['img']) && isset($in['img']['height'])) ? $in['img']['height'] : null)),'" class="',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['img'])) ? $in['classes']['img'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['img'])) ? $in['styles']['img'] : null)),'">
';}else{echo '			<img src="',lcr59cd19d1da7e7encq($cx, ((isset($in['default-img']) && is_array($in['default-img']) && isset($in['default-img']['src'])) ? $in['default-img']['src'] : null)),'" width="',lcr59cd19d1da7e7encq($cx, ((isset($in['default-img']) && is_array($in['default-img']) && isset($in['default-img']['width'])) ? $in['default-img']['width'] : null)),'" height="',lcr59cd19d1da7e7encq($cx, ((isset($in['default-img']) && is_array($in['default-img']) && isset($in['default-img']['height'])) ? $in['default-img']['height'] : null)),'" class="',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['img'])) ? $in['classes']['img'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['img'])) ? $in['styles']['img'] : null)),'">
';}echo '	</span>
	<div class="',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['options'])) ? $in['classes']['options'] : null)),' visible-loggedin-',lcr59cd19d1da7e7encq($cx, ((isset($in['tls']) && is_array($in['tls']) && isset($in['tls']['domain-id'])) ? $in['tls']['domain-id'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['options'])) ? $in['styles']['options'] : null)),'">
		<a ',lcr59cd19d1da7e7hbbch($cx, 'generateId', array(array(),array('group'=>'set')), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['id'])) ? $in['id'] : null)),'';}),' href="#" class="loggedin-btn pop-featuredimage-btn set ',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['set-btn'])) ? $in['classes']['set-btn'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['set-btn'])) ? $in['styles']['set-btn'] : null)),'"><span class="glyphicon glyphicon-upload"></span> ',lcr59cd19d1da7e7encq($cx, ((isset($in['titles']) && is_array($in['titles']) && isset($in['titles']['btn-add'])) ? $in['titles']['btn-add'] : null)),'</a>
';if (lcr59cd19d1da7e7ifvar($cx, (($inary && isset($in['value'])) ? $in['value'] : null), false)){echo '			<a ',lcr59cd19d1da7e7hbbch($cx, 'generateId', array(array(),array('group'=>'remove')), $in, false, function($cx, $in) {$inary=is_array($in);echo '',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['id'])) ? $in['id'] : null)),'';}),' href="#" class="loggedin-btn pop-featuredimage-btn remove ',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['remove-btn'])) ? $in['classes']['remove-btn'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['remove-btn'])) ? $in['styles']['remove-btn'] : null)),'"><span class="glyphicon glyphicon-remove-sign"></span> ',lcr59cd19d1da7e7encq($cx, ((isset($in['titles']) && is_array($in['titles']) && isset($in['titles']['btn-remove'])) ? $in['titles']['btn-remove'] : null)),'</a>
';}else{echo '';}echo '	</div>
	<div class="',lcr59cd19d1da7e7encq($cx, ((isset($in['classes']) && is_array($in['classes']) && isset($in['classes']['options'])) ? $in['classes']['options'] : null)),' visible-notloggedin-',lcr59cd19d1da7e7encq($cx, ((isset($in['tls']) && is_array($in['tls']) && isset($in['tls']['domain-id'])) ? $in['tls']['domain-id'] : null)),'" style="',lcr59cd19d1da7e7encq($cx, ((isset($in['styles']) && is_array($in['styles']) && isset($in['styles']['options'])) ? $in['styles']['options'] : null)),'">
		',lcr59cd19d1da7e7raw($cx, ((isset($in['titles']) && is_array($in['titles']) && isset($in['titles']['usernotloggedin'])) ? $in['titles']['usernotloggedin'] : null)),'
	</div>
</div>
<input type="hidden" value="',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['value'])) ? $in['value'] : null)),'" name="',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['formcomponent-name'])) ? $in['formcomponent-name'] : null)),'" id="',lcr59cd19d1da7e7encq($cx, lcr59cd19d1da7e7hbch($cx, 'lastGeneratedId', array(array(),array()), 'encq', $in)),'-',lcr59cd19d1da7e7encq($cx, (($inary && isset($in['formcomponent-name'])) ? $in['formcomponent-name'] : null)),'" class="form-control">
<div class="clearfix"></div>';return ob_get_clean();
};
?>