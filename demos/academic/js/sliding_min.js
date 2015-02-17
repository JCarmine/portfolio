/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
 
 
 /*
 * jQuery Address Plugin v${version}
 * http://www.asual.com/jquery/address/
 *
 * Copyright (c) 2009-2010 Rostislav Hristov
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Date: ${timestamp}
 */
(function ($) {

    $.address = (function () {

        var _trigger = function(name) {
               var ev = $.extend($.Event(name), 
                 (function() {
                            var parameters = {},
                                parameterNames = $.address.parameterNames();
                            for (var i = 0, l = parameterNames.length; i < l; i++) {
                                parameters[parameterNames[i]] = $.address.parameter(parameterNames[i]);
                            }
                            return {
                                value: $.address.value(),
                                path: $.address.path(),
                                pathNames: $.address.pathNames(),
                                parameterNames: parameterNames,
                                parameters: parameters,
                                queryString: $.address.queryString()
                            };
                        }).call($.address)
                    );

               $($.address).trigger(ev);
               return ev;
            },
            _array = function(obj) {
                return Array.prototype.slice.call(obj);
            },
            _bind = function(value, data, fn) {
                $().bind.apply($($.address), Array.prototype.slice.call(arguments));
                return $.address;
            },
            _unbind = function(value,  fn) {
                $().unbind.apply($($.address), Array.prototype.slice.call(arguments));
                return $.address;
            },
            _supportsState = function() {
                return (_h.pushState && _opts.state !== UNDEFINED);
            },
            _hrefState = function() {
                return ('/' + _l.pathname.replace(new RegExp(_opts.state), '') + 
                    _l.search + (_hrefHash() ? '#' + _hrefHash() : '')).replace(_re, '/');
            },
            _hrefHash = function() {
                var index = _l.href.indexOf('#');
                return index != -1 ? _crawl(_l.href.substr(index + 1), FALSE) : '';
            },
            _href = function() {
                return _supportsState() ? _hrefState() : _hrefHash();
            },
            _window = function() {
                try {
                    return top.document !== UNDEFINED && top.document.title !== UNDEFINED ? top : window;
                } catch (e) { 
                    return window;
                }
            },
            _js = function() {
                return 'javascript';
            },
            _strict = function(value) {
                value = value.toString();
                return (_opts.strict && value.substr(0, 1) != '/' ? '/' : '') + value;
            },
            _crawl = function(value, direction) {
                if (_opts.crawlable && direction) {
                    return (value !== '' ? '!' : '') + value;
                }
                return value.replace(/^\!/, '');
            },
            _cssint = function(el, value) {
                return parseInt(el.css(value), 10);
            },
            
            // Hash Change Callback
            _listen = function() {
                if (!_silent) {
                    var hash = _href(),
                        diff = decodeURI(_value) != decodeURI(hash);
                    if (diff) {
                        if (_msie && _version < 7) {
                            _l.reload();
                        } else {
                            if (_msie && !_hashchange && _opts.history) {
                                _st(_html, 50);
                            }
                            _old = _value;
                            _value = hash;
                            _update(FALSE);
                        }
                    }
                }
            },

            _update = function(internal) {
                var changeEv = _trigger(CHANGE),
                    xChangeEv = _trigger(internal ? INTERNAL_CHANGE : EXTERNAL_CHANGE);
                
                _st(_track, 10);

                if (changeEv.isDefaultPrevented() || xChangeEv.isDefaultPrevented()){
                  _preventDefault();
                }
            },

            _preventDefault = function(){
              _value = _old;
              
              if (_supportsState()) {
                  _h.popState({}, '', _opts.state.replace(/\/$/, '') + (_value === '' ? '/' : _value));
              } else {
                  _silent = TRUE;
                  if (_webkit) {
                      if (_opts.history) {
                          _l.hash = '#' + _crawl(_value, TRUE);
                      } else {
                          _l.replace('#' + _crawl(_value, TRUE));
                      }
                  } else if (_value != _href()) {
                      if (_opts.history) {
                          _l.hash = '#' + _crawl(_value, TRUE);
                      } else {
                          _l.replace('#' + _crawl(_value, TRUE));
                      }
                  }
                  if ((_msie && !_hashchange) && _opts.history) {
                      _st(_html, 50);
                  }
                  if (_webkit) {
                      _st(function(){ _silent = FALSE; }, 1);
                  } else {
                      _silent = FALSE;
                  }
              }
              
            },

            _track = function() {
                if (_opts.tracker !== 'null' && _opts.tracker !== NULL) {
                    var fn = $.isFunction(_opts.tracker) ? _opts.tracker : _t[_opts.tracker],
                        value = (_l.pathname + _l.search + 
                                ($.address && !_supportsState() ? $.address.value() : ''))
                                .replace(/\/\//, '/').replace(/^\/$/, '');
                    if ($.isFunction(fn)) {
                        fn(value);
                    } else if ($.isFunction(_t.urchinTracker)) {
                        _t.urchinTracker(value);
                    } else if (_t.pageTracker !== UNDEFINED && $.isFunction(_t.pageTracker._trackPageview)) {
                        _t.pageTracker._trackPageview(value);
                    } else if (_t._gaq !== UNDEFINED && $.isFunction(_t._gaq.push)) {
                        _t._gaq.push(['_trackPageview', decodeURI(value)]);
                    }
                }
            },
            _html = function() {
                var src = _js() + ':' + FALSE + ';document.open();document.writeln(\'<html><head><title>' + 
                    _d.title.replace(/\'/g, '\\\'') + '</title><script>var ' + ID + ' = "' + encodeURIComponent(_href()).replace(/\'/g, '\\\'') + 
                    (_d.domain != _l.hostname ? '";document.domain="' + _d.domain : '') + 
                    '";</' + 'script></head></html>\');document.close();';
                if (_version < 7) {
                    _frame.src = src;
                } else {
                    _frame.contentWindow.location.replace(src);
                }
            },
            _options = function() {
                if (_url && _qi != -1) {
                    var i, param, params = _url.substr(_qi + 1).split('&');
                    for (i = 0; i < params.length; i++) {
                        param = params[i].split('=');
                        if (/^(autoUpdate|crawlable|history|strict|wrap)$/.test(param[0])) {
                            _opts[param[0]] = (isNaN(param[1]) ? /^(true|yes)$/i.test(param[1]) : (parseInt(param[1], 10) !== 0));
                        }
                        if (/^(state|tracker)$/.test(param[0])) {
                            _opts[param[0]] = param[1];
                        }
                    }
                    _url = NULL;
                }
                _old = _value;
                _value = _href();
            },
            _load = function() {
                if (!_loaded) {
                    _loaded = TRUE;
                    _options();
                    var complete = function() {
                            _enable.call(this);
                            _unescape.call(this);
                        },
                        body = $('body').ajaxComplete(complete);
                    complete();
                    if (_opts.wrap) {
                        var wrap = $('body > *')
                            .wrapAll('<div style="padding:' + 
                                (_cssint(body, 'marginTop') + _cssint(body, 'paddingTop')) + 'px ' + 
                                (_cssint(body, 'marginRight') + _cssint(body, 'paddingRight')) + 'px ' + 
                                (_cssint(body, 'marginBottom') + _cssint(body, 'paddingBottom')) + 'px ' + 
                                (_cssint(body, 'marginLeft') + _cssint(body, 'paddingLeft')) + 'px;" />')
                            .parent()
                            .wrap('<div id="' + ID + '" style="height:100%;overflow:auto;position:relative;' + 
                                (_webkit && !window.statusbar.visible ? 'resize:both;' : '') + '" />');
                        $('html, body')
                            .css({
                                height: '100%',
                                margin: 0,
                                padding: 0,
                                overflow: 'hidden'
                            });
                        if (_webkit) {
                            $('<style type="text/css" />')
                                .appendTo('head')
                                .text('#' + ID + '::-webkit-resizer { background-color: #fff; }');
                        }
                    }
                    if (_msie && !_hashchange) {
                        var frameset = _d.getElementsByTagName('frameset')[0];
                        _frame = _d.createElement((frameset ? '' : 'i') + 'frame');
                        _frame.src = _js() + ':' + FALSE;
                        if (frameset) {
                            frameset.insertAdjacentElement('beforeEnd', _frame);
                            frameset[frameset.cols ? 'cols' : 'rows'] += ',0';
                            _frame.noResize = TRUE;
                            _frame.frameBorder = _frame.frameSpacing = 0;
                        } else {
                            _frame.style.display = 'none';
                            _frame.style.width = _frame.style.height = 0;
                            _frame.tabIndex = -1;
                            _d.body.insertAdjacentElement('afterBegin', _frame);
                        }
                        _st(function() {
                            $(_frame).bind('load', function() {
                                var win = _frame.contentWindow;
                                _old = _value;
                                _value = win[ID] !== UNDEFINED ? win[ID] : '';
                                if (_value != _href()) {
                                    _update(FALSE);
                                    _l.hash = _crawl(_value, TRUE);
                                }
                            });
                            if (_frame.contentWindow[ID] === UNDEFINED) {
                                _html();
                            }
                        }, 50);
                    }
                    _st(function() {
                        _trigger('init');
                        _update(FALSE);
                    }, 1);
                    if (!_supportsState()) {
                        if (_hashchange) {
                            if (_t.addEventListener) {
                                _t.addEventListener(HASH_CHANGE, _listen, FALSE);
                            } else if (_t.attachEvent) {
                                _t.attachEvent('on' + HASH_CHANGE, _listen);
                            }
                        } else {
                            _si(_listen, 50);
                        }
                    }
                    if ('state' in window.history) {
                        $(window).trigger('popstate');
                    }
                }
            },
            _enable = function() {
                var el, 
                    elements = $('a'), 
                    length = elements.size(),
                    delay = 1,
                    index = -1,
                    sel = '[rel*="address:"]',
                    fn = function() {
                        if (++index != length) {
                            el = $(elements.get(index));
                            if (el.is(sel)) {
                                el.address(sel);
                            }
                            _st(fn, delay);
                        }
                    };
                _st(fn, delay);
            },
            _popstate = function() {
                if (decodeURI(_value) != decodeURI(_href())) {
                    _old = _value;
                    _value = _href();
                    _update(FALSE);
                }
            },
            _unload = function() {
                if (_t.removeEventListener) {
                    _t.removeEventListener(HASH_CHANGE, _listen, FALSE);
                } else if (_t.detachEvent) {
                    _t.detachEvent('on' + HASH_CHANGE, _listen);
                }
            },
            _unescape = function() {
                if (_opts.crawlable) {
                    var base = _l.pathname.replace(/\/$/, ''),
                        fragment = '_escaped_fragment_';
                    if ($('body').html().indexOf(fragment) != -1) {
                        $('a[href]:not([href^=http]), a[href*="' + document.domain + '"]').each(function() {
                            var href = $(this).attr('href').replace(/^http:/, '').replace(new RegExp(base + '/?$'), '');
                            if (href === '' || href.indexOf(fragment) != -1) {
                                $(this).attr('href', '#' + encodeURI(decodeURIComponent(href.replace(new RegExp('/(.*)\\?' + 
                                    fragment + '=(.*)$'), '!$2'))));
                            }
                        });
                    }
                }
            },
            UNDEFINED,
            NULL = null,
            ID = 'jQueryAddress',
            STRING = 'string',
            HASH_CHANGE = 'hashchange',
            INIT = 'init',
            CHANGE = 'change',
            INTERNAL_CHANGE = 'internalChange',
            EXTERNAL_CHANGE = 'externalChange',
            TRUE = true,
            FALSE = false,
            _opts = {
                autoUpdate: TRUE, 
                crawlable: FALSE,
                history: TRUE, 
                strict: TRUE,
                wrap: FALSE
            },
            _browser = $.browser, 
            _version = parseFloat(_browser.version),
            _msie = !$.support.opacity,
            _webkit = _browser.webkit || _browser.safari,
            _t = _window(),
            _d = _t.document,
            _h = _t.history, 
            _l = _t.location,
            _si = setInterval,
            _st = setTimeout,
            _re = /\/{2,9}/g,
            _agent = navigator.userAgent,
            _hashchange = 'on' + HASH_CHANGE in _t,
            _frame,
            _form,
            _url = $('script:last').attr('src'),
            _qi = _url ? _url.indexOf('?') : -1,
            _title = _d.title, 
            _silent = FALSE,
            _loaded = FALSE,
            _juststart = TRUE,
            _updating = FALSE,
            _listeners = {}, 
            _value = _href();
            _old = _value;
            
        if (_msie) {
            _version = parseFloat(_agent.substr(_agent.indexOf('MSIE') + 4));
            if (_d.documentMode && _d.documentMode != _version) {
                _version = _d.documentMode != 8 ? 7 : 8;
            }
            var pc = _d.onpropertychange;
            _d.onpropertychange = function() {
                if (pc) {
                    pc.call(_d);
                }
                if (_d.title != _title && _d.title.indexOf('#' + _href()) != -1) {
                    _d.title = _title;
                }
            };
        }
        
        if (_h.navigationMode) {
            _h.navigationMode = 'compatible';
        }
        if (document.readyState == 'complete') {
            var interval = setInterval(function() {
                if ($.address) {
                    _load();
                    clearInterval(interval);
                }
            }, 50);
        } else {
            _options();
            $(_load);
        }
        $(window).bind('popstate', _popstate).bind('unload', _unload);

        return {
            bind: function(type, data, fn) {
                return _bind.apply(this, _array(arguments));
            },
            unbind: function(type, fn) {
                return _unbind.apply(this, _array(arguments));
            },
            init: function(data, fn) {
                return _bind.apply(this, [INIT].concat(_array(arguments)));
            },
            change: function(data, fn) {
                return _bind.apply(this, [CHANGE].concat(_array(arguments)));
            },
            internalChange: function(data, fn) {
                return _bind.apply(this, [INTERNAL_CHANGE].concat(_array(arguments)));
            },
            externalChange: function(data, fn) {
                return _bind.apply(this, [EXTERNAL_CHANGE].concat(_array(arguments)));
            },
            baseURL: function() {
                var url = _l.href;
                if (url.indexOf('#') != -1) {
                    url = url.substr(0, url.indexOf('#'));
                }
                if (/\/$/.test(url)) {
                    url = url.substr(0, url.length - 1);
                }
                return url;
            },
            autoUpdate: function(value) {
                if (value !== UNDEFINED) {
                    _opts.autoUpdate = value;
                    return this;
                }
                return _opts.autoUpdate;
            },
            crawlable: function(value) {
                if (value !== UNDEFINED) {
                    _opts.crawlable = value;
                    return this;
                }
                return _opts.crawlable;
            },
            history: function(value) {
                if (value !== UNDEFINED) {
                    _opts.history = value;
                    return this;
                }
                return _opts.history;
            },
            state: function(value) {
                if (value !== UNDEFINED) {
                    _opts.state = value;
                    var hrefState = _hrefState();
                    if (_opts.state !== UNDEFINED) {
                        if (_h.pushState) {
                            if (hrefState.substr(0, 3) == '/#/') {
                                _l.replace(_opts.state.replace(/^\/$/, '') + hrefState.substr(2));
                            }
                        } else if (hrefState != '/' && hrefState.replace(/^\/#/, '') != _hrefHash()) {
                            _st(function() {
                                _l.replace(_opts.state.replace(/^\/$/, '') + '/#' + hrefState);
                            }, 1);
                        }
                    }
                    return this;
                }
                return _opts.state;
            },
            strict: function(value) {
                if (value !== UNDEFINED) {
                    _opts.strict = value;
                    return this;
                }
                return _opts.strict;
            },
            tracker: function(value) {
                if (value !== UNDEFINED) {
                    _opts.tracker = value;
                    return this;
                }
                return _opts.tracker;
            },
            wrap: function(value) {
                if (value !== UNDEFINED) {
                    _opts.wrap = value;
                    return this;
                }
                return _opts.wrap;
            },
            update: function() {
                _updating = TRUE;
                this.value(_value);
                _updating = FALSE;
                return this;
            },
            title: function(value) {
                if (value !== UNDEFINED) {
                    _st(function() {
                        _title = _d.title = value;
                        if (_juststart && _frame && _frame.contentWindow && _frame.contentWindow.document) {
                            _frame.contentWindow.document.title = value;
                            _juststart = FALSE;
                        }
                    }, 50);
                    return this;
                }
                return _d.title;
            },
            value: function(value) {
                if (value !== UNDEFINED) {
                    value = _strict(value);
                    if (value == '/') {
                        value = '';
                    }
                    if (_value == value && !_updating) {
                        return;
                    }
                    _old = _value;
                    _value = value;
                    if (_opts.autoUpdate || _updating) {
                        _update(TRUE);
                        if (_supportsState()) {
                            _h[_opts.history ? 'pushState' : 'replaceState']({}, '', 
                                    _opts.state.replace(/\/$/, '') + (_value === '' ? '/' : _value));
                        } else {
                            _silent = TRUE;
                            if (_webkit) {
                                if (_opts.history) {
                                    _l.hash = '#' + _crawl(_value, TRUE);
                                } else {
                                    _l.replace('#' + _crawl(_value, TRUE));
                                }
                            } else if (_value != _href()) {
                                if (_opts.history) {
                                    _l.hash = '#' + _crawl(_value, TRUE);
                                } else {
                                    _l.replace('#' + _crawl(_value, TRUE));
                                }
                            }
                            if ((_msie && !_hashchange) && _opts.history) {
                                _st(_html, 50);
                            }
                            if (_webkit) {
                                _st(function(){ _silent = FALSE; }, 1);
                            } else {
                                _silent = FALSE;
                            }
                        }
                    }
                    return this;
                }
                return _strict(_value);
            },
            path: function(value) {
                if (value !== UNDEFINED) {
                    var qs = this.queryString(),
                        hash = this.hash();
                    this.value(value + (qs ? '?' + qs : '') + (hash ? '#' + hash : ''));
                    return this;
                }
                return _strict(_value).split('#')[0].split('?')[0];
            },
            pathNames: function() {
                var path = this.path(),
                    names = path.replace(_re, '/').split('/');
                if (path.substr(0, 1) == '/' || path.length === 0) {
                    names.splice(0, 1);
                }
                if (path.substr(path.length - 1, 1) == '/') {
                    names.splice(names.length - 1, 1);
                }
                return names;
            },
            queryString: function(value) {
                if (value !== UNDEFINED) {
                    var hash = this.hash();
                    this.value(this.path() + (value ? '?' + value : '') + (hash ? '#' + hash : ''));
                    return this;
                }
                var arr = _value.split('?');
                return arr.slice(1, arr.length).join('?').split('#')[0];
            },
            parameter: function(name, value, append) {
                var i, params;
                if (value !== UNDEFINED) {
                    var names = this.parameterNames();
                    params = [];
                    value = value === UNDEFINED || value === NULL ? '' : value.toString();
                    for (i = 0; i < names.length; i++) {
                        var n = names[i],
                            v = this.parameter(n);
                        if (typeof v == STRING) {
                            v = [v];
                        }
                        if (n == name) {
                            v = (value === NULL || value === '') ? [] : 
                                (append ? v.concat([value]) : [value]);
                        }
                        for (var j = 0; j < v.length; j++) {
                            params.push(n + '=' + v[j]);
                        }
                    }
                    if ($.inArray(name, names) == -1 && value !== NULL && value !== '') {
                        params.push(name + '=' + value);
                    }
                    this.queryString(params.join('&'));
                    return this;
                }
                value = this.queryString();
                if (value) {
                    var r = [];
                    params = value.split('&');
                    for (i = 0; i < params.length; i++) {
                        var p = params[i].split('=');
                        if (p[0] == name) {
                            r.push(p.slice(1).join('='));
                        }
                    }
                    if (r.length !== 0) {
                        return r.length != 1 ? r : r[0];
                    }
                }
            },
            parameterNames: function() {
                var qs = this.queryString(),
                    names = [];
                if (qs && qs.indexOf('=') != -1) {
                    var params = qs.split('&');
                    for (var i = 0; i < params.length; i++) {
                        var name = params[i].split('=')[0];
                        if ($.inArray(name, names) == -1) {
                            names.push(name);
                        }
                    }
                }
                return names;
            },
            hash: function(value) {
                if (value !== UNDEFINED) {
                    this.value(_value.split('#')[0] + (value ? '#' + value : ''));
                    return this;
                }
                var arr = _value.split('#');
                return arr.slice(1, arr.length).join('#');                
            }
        };
    })();
    
    $.fn.address = function(fn) {
        var sel;
        if (typeof fn == 'string') {
            sel = fn;
            fn = undefined;
        }
        if (!$(this).attr('address')) {
            var f = function(e) {
                if (e.shiftKey || e.ctrlKey || e.metaKey || e.which == 2) {
                    return true;
                }
                if ($(this).is('a')) {
                    e.preventDefault();
                    var value = fn ? fn.call(this) : 
                        /address:/.test($(this).attr('rel')) ? $(this).attr('rel').split('address:')[1].split(' ')[0] : 
                        $.address.state() !== undefined && !/^\/?$/.test($.address.state()) ? 
                                $(this).attr('href').replace(new RegExp('^(.*' + $.address.state() + '|\\.)'), '') : 
                                $(this).attr('href').replace(/^(#\!?|\.)/, '');
                    $.address.value(value);
                }
            };
            $(sel ? sel : this).live('click', f).live('submit', function(e) {
                if ($(this).is('form')) {
                    e.preventDefault();
                    var action = $(this).attr('action'),
                        value = fn ? fn.call(this) : (action.indexOf('?') != -1 ? action.replace(/&$/, '') : action + '?') + 
                            $(this).serialize();
                    $.address.value(value);
                }
            }).attr('address', true);
        }
        return this;
    };
    
})(jQuery);

/*
 * Sliding Website Plugin 
 * Programmer: Fabio Ferrante
 * CodeCanyon: http://codecanyon.net/user/kernelstudio/portfolio
 *
 * If this script you like, please put a comment on codecanyon.
 *
 * Includes jQuery Easing v1.3
 * http://gsgd.co.uk/sandbox/jquery/easing/
 * Copyright (c) 2008 George McGinley Smith
 * jQuery Easing released under the BSD License.	
 *
 * Includes jQuery Address v1.4
 * http://www.asual.com/jquery/address/
 * Copyright (c) 2004-2010 Asual DZZD
 * jQuery Easing released under both MIT and GPL licenses.	
 *
*/
(function(a){function g(b){count=0;d.each(function(){if(a(this).find("a").attr("rel")===b){position=count}count++});return position}function h(){$newpage.load(settings.url,function(){if(_thisSlideCallback!==""){settings.callbacks[_thisSlideCallback]()}e.css("min-height",$newpage.css("height"));$newpage.css("min-height",$newpage.css("height"));_toLoad=false})}function i(a){path=a.path;if(path.charAt(0)==="/"){path=path.substr(1)}if(path.charAt(path.length-1)==="/"){path=path.substr(0,path.length-1)}settings.toLoad=path;if(!f&&settings.toLoad!==""){m()}}function j(b){if(b.data("transition")!=null){if(b.data("transition").slideScroll!=null&&b.data("transition").slideScroll!==""){_thisSlideScroll=b.data("transition").slideScroll}if(b.data("transition").easing!=null&&b.data("transition").easing!==""){_thisSlideEasing=b.data("transition").easing}if(b.data("transition").callback!=null&&b.data("transition").callback!==""){_thisSlideCallback=b.data("transition").callback;_thisSlideCallback=function(){a(this).data("transition").callback}}}settings.toLoad=b.attr("rel");window.location="#/"+settings.toLoad;if(f){m()}}function k(){a("body").append('<a class="next">Next</a>');a("body").append('<a class="prev">Prev</a>');a(".next").css("top",Math.round((b.height()-a(".next").height())/2));a(".prev").css("top",Math.round((b.height()-a(".prev").height())/2));a(".next , .prev").click(function(){j(a(this));return false})}function l(b){var c=a("ul").index(b.parents().eq(1));if(c>0){b.parents().eq(2).find("a:first").addClass("current");if(settings.navigation.nestedPagesFlows){var d=b.parent();d.parent().parent().find("ul").css({left:0}).stop(false,false).fadeTo("fast",1).delay(300).fadeTo("fast",0,function(){d.parent().parent().find("ul").removeAttr("style")});if(d.is("li:first-child")&&d.is("li:not(:last-child)")){_prevPage=b.parents().eq(2).find("a");_nextPage=d.next().find("a")}else if(b.parent().is("li:last-child")&&b.parent().is("li:not(:first-child)")){_prevPage=d.prev().find("a");_nextPage=b.parents().eq(2).next().find("a")}else if(d.is("li:first-child")&&d.is("li:last-child")){_prevPage=b.parents().eq(2).find("a");_nextPage=b.parents().eq(2).next().find("a")}else{_prevPage=d.prev().find("a");_nextPage=d.next().find("a")}}}else{var e=b.parent().find("ul").length;if(e>0&&settings.navigation.nestedPagesFlows){_nextPage=b.parent().children().find("a");_prevPage=b.parent().prev().find("a")}else{_nextPage=b.parent().next().find("a");_prevPage=b.parent().prev().find("a")}}if(_nextPage.attr("rel")==null){_nextPage=b.parents().eq(1).children(":first").find("a")}if(_prevPage.attr("rel")==null){_prevPage=b.parents().eq(1).children(":last").find("a")}a(".next").attr({rel:_nextPage.attr("rel"),href:_nextPage.attr("href"),title:_nextPage.attr("title")});if(_nextPage.attr("data-transition")!=null){a(".next").attr("data-transition",_nextPage.attr("data-transition"))}else{a(".next").removeAttr("data-transition")}a(".prev").attr({rel:_prevPage.attr("rel"),href:_prevPage.attr("href"),title:_prevPage.attr("title")});if(_prevPage.attr("data-transition")!=null){a(".prev").attr("data-transition",_prevPage.attr("data-transition"))}else{a(".prev").removeAttr("data-transition")}if(b.data("transition")!=null){if(b.data("transition").slideScroll!=null&&b.data("transition").slideScroll!==""){_thisSlideScroll=b.data("transition").slideScroll}if(b.data("transition").easing!=null&&b.data("transition").easing!==""){_thisSlideEasing=b.data("transition").easing}if(b.data("transition").callback!=null&&b.data("transition").callback!==""){_thisSlideCallback=b.data("transition").callback}}}function m(){if(!settings.animate&&settings.toLoad!==""&&settings.actual!==""){_tempSlideEasing="";_thisSlideEasing="";_tempSlideScroll="";_thisSlideScroll="";_thisSlideCallback="";_isAnimating=settings.toLoad;var f=settings.actual;if(settings.toLoad===""){window.location="#/"+d.first().find("a").attr("rel");settings.toLoad=d.first().find("a").attr("rel")}d.find("a").removeClass("current").each(function(){if(a(this).attr("rel")===settings.toLoad){a(this).toggleClass("current");l(a(this));return false}});if(f!==settings.toLoad){$oldpage=a("#"+f);$newpage=a("#"+settings.toLoad);settings.animate=true;csstop=-_scroll+settings.top;$oldpage.css({position:"fixed",top:csstop});e.css("min-height",b.height()+10-settings.top);a.data(document.body,"_scroll",_scroll);b.scrollTop(0);settings.actual=settings.toLoad;d.each(function(){if(a(this).find("a").attr("rel")===settings.toLoad){settings.url=a(this).find("a").attr("href");settings.title=a(this).find("a").attr("title");if(settings.title!==""){c.title=c.title.substring(0,c.title.lastIndexOf(" |"));c.title=c.title+" | "+settings.title}}});if($newpage.is("*")){if($newpage.hasClass("pageContainer")===false){$newpage.addClass("pageContainer")}$newpage.show();e.css("min-height",$newpage.css("height"))}else{e.append('<div class="pageContainer" id="'+settings.toLoad+'"/>');$newpage=a("#"+settings.toLoad);$newpage.css({"min-height":b.height()+10-settings.top});$newpage.hide();e.css("min-height",b.height()+10-settings.top);$newpage.append('<div class="loading"/>');_toLoad=true}if(_thisSlideScroll!==""){settings.slideScroll=_thisSlideScroll}if(_thisSlideEasing!==""){settings.easing=_thisSlideEasing}switch(settings.easing){case"fade":$newpage.css({left:0});if(_thisSlideCallback!==""&&!_toLoad){settings.callbacks[_thisSlideCallback]()}$newpage.hide();$oldpage.fadeOut(settings.speed,function(){$oldpage.css({position:"absolute",top:0})});$newpage.fadeIn(settings.speed,function(){if(_thisSlideEasing!==""){settings.easing=_tempSlideEasing;_tempSlideEasing="";_thisSlideEasing=""}if(_thisSlideScroll!==""){settings.slideScroll=_tempSlideScroll;_tempSlideScroll="";_thisSlideScroll=""}if(_toLoad){h()}_scroll=0;settings.animate=false;$oldpage.hide();if(_isAnimating!=settings.toLoad){m()}});break;default:if(settings.slideScroll==="vertical"){a.data($newpage,"z-index",$newpage.css("z-index"));$oldpage.after('<div class="outerold" />');$outerold=a(".outerold");$outerold.css({width:100+"%","min-height":b.height()+10,overflow:"hidden",position:"absolute",top:0,"z-index":parseInt($oldpage.css("z-index"))+1});$oldpage.css({position:"absolute",top:-a.data(document.body,"_scroll")});$outerold.wrapInner($oldpage);if(g(f)>g(settings.toLoad)){$newpage.css({left:0,top:b.height()-settings.top});moveActualPage=0-b.height()+settings.top}else{$newpage.css({left:0,top:0-b.height()+settings.top});moveActualPage=b.height()-settings.top}$newpage.show();if(_thisSlideCallback!==""&&!_toLoad){settings.callbacks[_thisSlideCallback]()}a("html, body").animate({scrollTop:0},10);$outerold.animate({top:moveActualPage},settings.speed,settings.easing,function(){$oldpage.unwrap();$oldpage.css({position:"absolute",top:0})});$newpage.animate({top:0},settings.speed,settings.easing,function(){if(_thisSlideEasing!==""){settings.easing=_tempSlideEasing;_tempSlideEasing="";_thisSlideEasing=""}if(_thisSlideScroll!==""){settings.slideScroll=_tempSlideScroll;_tempSlideScroll="";_thisSlideScroll=""}if(_toLoad){h()}_scroll=0;settings.animate=false;$oldpage.hide();if(_isAnimating!=settings.toLoad){m()}})}else{if(g(f)<g(settings.toLoad)){$newpage.css({left:b.width()});moveActualPage=0-b.width()}else{$newpage.css({left:0-b.width()});moveActualPage=b.width()}$newpage.show();if(_thisSlideCallback!==""&&!_toLoad){settings.callbacks[_thisSlideCallback]()}a("html, body").animate({scrollTop:0},10);$oldpage.animate({left:moveActualPage},settings.speed,settings.easing,function(){$oldpage.css({position:"absolute",top:0})});$newpage.animate({left:0},settings.speed,settings.easing,function(){if(_thisSlideEasing!==""){settings.easing=_tempSlideEasing;_tempSlideEasing="";_thisSlideEasing=""}if(_thisSlideScroll!==""){settings.slideScroll=_tempSlideScroll;_tempSlideScroll="";_thisSlideScroll=""}if(_toLoad){h()}_scroll=0;settings.animate=false;$oldpage.hide();if(_isAnimating!=settings.toLoad){m()}})}}}}}function n(){if(e.is("*")===false){a("body").wrapInner('<div id="contentSlide" />');e=a("#contentSlide")}e.css("top",settings.top);if(settings.navigation.show){k()}_tempSlideScroll=settings.slideScroll;_tempSlideEasing=settings.easing;if(d.is("*")){settings.actual=window.location.hash.replace("#/","");if(settings.actual===""){d.each(function(){if(a(this).hasClass("startPage")){settings.actual=a(this).find("a").attr("rel");window.location="#/"+settings.actual;_findStart=true}});if(!_findStart){window.location="#/"+d.first().find("a").attr("rel");settings.actual=d.first().find("a").attr("rel")}}d.each(function(){a("#"+a(this).find("a").attr("rel")).hide();if(a(this).find("a").attr("rel")===settings.actual){a(this).find("a").addClass("current");l(a(this).find("a"));settings.url=a(this).find("a").attr("href");settings.title=a(this).find("a").attr("title");if(settings.title!==""){c.title=c.title+" | "+settings.title}if(a(this).find("a").data("transition")!=null){if(a(this).find("a").data("transition").callback!=null&&a(this).find("a").data("transition").callback!==""){_thisSlideCallback=a(this).find("a").data("transition").callback}}}});$firstpage=a("#"+settings.actual);if($firstpage.is("*")){if($firstpage.hasClass("pageContainer")===false){$firstpage.addClass("pageContainer")}$firstpage.show();if(_thisSlideCallback!==""){settings.callbacks[_thisSlideCallback]()}e.css("min-height",a("#"+settings.actual).css("height"))}else{e.css("min-height",b.height()+10-settings.top);e.append('<div class="pageContainer" id="'+settings.actual+'"/>');$firstpage=a("#"+settings.actual);$firstpage.append('<div class="loading"/>');$firstpage.load(settings.url,function(){e.css("min-height",a("#"+settings.actual).css("height"));if(_thisSlideCallback!==""){settings.callbacks[_thisSlideCallback]()}})}}}var b,c,d,e;b=a(window);c=document;e=a("#contentSlide");_findStart=false;_scroll=0;_toLoad=false;_thisSlideScroll="";_thisSlideEasing="";_thisSlideCallback="";a("html, body").scrollTop(_scroll);var f=window.location!=window.parent.location?true:false;b.scroll(function(){_scroll=b.scrollTop()});b.resize(function(){if(settings.navigation){a(".next").css("top",Math.round((b.height()-a(".next").height())/2));a(".prev").css("top",Math.round((b.height()-a(".prev").height())/2))}if(parseInt(e.css("min-height"))<b.height()){e.css("min-height",b.height())}});a.fn.slidingPage=function(b){d=a(this);defaults={actual:"",toLoad:"",url:"",title:"",animate:false,speed:1500,easing:"easeInOutQuint",slideScroll:"horizontal",top:0,navigation:{show:true,nestedPagesFlows:true},callbacks:{}};settings=a.extend({},defaults,b);if(!f){a.address.init(n).change(i)}else{n()}d.find("a").add(".revolver").click(function(b){b.stopPropagation();j(a(this));return false})}})(jQuery)


