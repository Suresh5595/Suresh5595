!(function (e, t) {
    void 0 === e && void 0 !== window && (e = window),
        "function" == typeof define && define.amd
            ? define(["jquery"], function (e) {
                  return t(e);
              })
            : "object" == typeof module && module.exports
            ? (module.exports = t(require("jquery")))
            : t(e.jQuery);
})(this, function (e) {
    !(function (j) {
        "use strict";
        var e,
            c,
            t,
            i = document.createElement("_");
        if ((i.classList.toggle("c3", !1), i.classList.contains("c3"))) {
            var n = DOMTokenList.prototype.toggle;
            DOMTokenList.prototype.toggle = function (e, t) {
                return 1 in arguments && !this.contains(e) == !t ? t : n.call(this, e);
            };
        }
        function $(e) {
            var t,
                i = [],
                n = e && e.options;
            if (e.multiple) for (var s = 0, o = n.length; s < o; s++) (t = n[s]).selected && i.push(t.value || t.text);
            else i = e.value;
            return i;
        }
        String.prototype.startsWith ||
            ((e = (function () {
                try {
                    var e = {},
                        t = Object.defineProperty,
                        i = t(e, e, e) && t;
                } catch (e) {}
                return i;
            })()),
            (c = {}.toString),
            (t = function (e) {
                if (null == this) throw new TypeError();
                var t = String(this);
                if (e && "[object RegExp]" == c.call(e)) throw new TypeError();
                var i = t.length,
                    n = String(e),
                    s = n.length,
                    o = 1 < arguments.length ? arguments[1] : void 0,
                    r = o ? Number(o) : 0;
                r != r && (r = 0);
                var l = Math.min(Math.max(r, 0), i);
                if (i < s + l) return !1;
                for (var a = -1; ++a < s; ) if (t.charCodeAt(l + a) != n.charCodeAt(a)) return !1;
                return !0;
            }),
            e ? e(String.prototype, "startsWith", { value: t, configurable: !0, writable: !0 }) : (String.prototype.startsWith = t)),
            Object.keys ||
                (Object.keys = function (e, t, i) {
                    for (t in ((i = []), e)) i.hasOwnProperty.call(e, t) && i.push(t);
                    return i;
                });
        var s = { useDefault: !1, _set: j.valHooks.select.set };
        j.valHooks.select.set = function (e, t) {
            return t && !s.useDefault && j(e).data("selected", !0), s._set.apply(this, arguments);
        };
        var S = null,
            o = (function () {
                try {
                    return new Event("change"), !0;
                } catch (e) {
                    return !1;
                }
            })();
        function y(e, t, i, n) {
            for (var s = ["content", "subtext", "tokens"], o = !1, r = 0; r < s.length; r++) {
                var l = s[r],
                    a = e[l];
                if (a && ((a = a.toString()), "content" === l && (a = a.replace(/<[^>]+>/g, "")), n && (a = d(a)), (a = a.toUpperCase()), (o = "contains" === i ? 0 <= a.indexOf(t) : a.startsWith(t)))) break;
            }
            return o;
        }
        function O(e) {
            return parseInt(e, 10) || 0;
        }
        function d(e) {
            return (
                j.each(
                    [
                        { re: /[\xC0-\xC6]/g, ch: "A" },
                        { re: /[\xE0-\xE6]/g, ch: "a" },
                        { re: /[\xC8-\xCB]/g, ch: "E" },
                        { re: /[\xE8-\xEB]/g, ch: "e" },
                        { re: /[\xCC-\xCF]/g, ch: "I" },
                        { re: /[\xEC-\xEF]/g, ch: "i" },
                        { re: /[\xD2-\xD6]/g, ch: "O" },
                        { re: /[\xF2-\xF6]/g, ch: "o" },
                        { re: /[\xD9-\xDC]/g, ch: "U" },
                        { re: /[\xF9-\xFC]/g, ch: "u" },
                        { re: /[\xC7-\xE7]/g, ch: "c" },
                        { re: /[\xD1]/g, ch: "N" },
                        { re: /[\xF1]/g, ch: "n" },
                    ],
                    function () {
                        e = e ? e.replace(this.re, this.ch) : "";
                    }
                ),
                e
            );
        }
        j.fn.triggerNative = function (e) {
            var t,
                i = this[0];
            i.dispatchEvent
                ? (o ? (t = new Event(e, { bubbles: !0 })) : (t = document.createEvent("Event")).initEvent(e, !0, !1), i.dispatchEvent(t))
                : i.fireEvent
                ? (((t = document.createEventObject()).eventType = e), i.fireEvent("on" + e, t))
                : this.trigger(e);
        };
        var r = function (t) {
                var i = function (e) {
                        return t[e];
                    },
                    e = "(?:" + Object.keys(t).join("|") + ")",
                    n = RegExp(e),
                    s = RegExp(e, "g");
                return function (e) {
                    return (e = null == e ? "" : "" + e), n.test(e) ? e.replace(s, i) : e;
                };
            },
            q = r({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#x27;", "`": "&#x60;" }),
            f = r({ "&amp;": "&", "&lt;": "<", "&gt;": ">", "&quot;": '"', "&#x27;": "'", "&#x60;": "`" }),
            E = {
                32: " ",
                48: "0",
                49: "1",
                50: "2",
                51: "3",
                52: "4",
                53: "5",
                54: "6",
                55: "7",
                56: "8",
                57: "9",
                59: ";",
                65: "A",
                66: "B",
                67: "C",
                68: "D",
                69: "E",
                70: "F",
                71: "G",
                72: "H",
                73: "I",
                74: "J",
                75: "K",
                76: "L",
                77: "M",
                78: "N",
                79: "O",
                80: "P",
                81: "Q",
                82: "R",
                83: "S",
                84: "T",
                85: "U",
                86: "V",
                87: "W",
                88: "X",
                89: "Y",
                90: "Z",
                96: "0",
                97: "1",
                98: "2",
                99: "3",
                100: "4",
                101: "5",
                102: "6",
                103: "7",
                104: "8",
                105: "9",
            },
            C = 27,
            T = 13,
            z = 32,
            D = 9,
            H = 38,
            L = 40,
            _ = { success: !1, major: "3" };
        try {
            (_.full = (j.fn.dropdown.Constructor.VERSION || "").split(" ")[0].split(".")), (_.major = _.full[0]), (_.success = !0);
        } catch (e) {
            console.warn(
                "There was an issue retrieving Bootstrap's version. Ensure Bootstrap is being loaded before bootstrap-select and there is no namespace collision. If loading Bootstrap asynchronously, the version may need to be manually specified via $.fn.selectpicker.Constructor.BootstrapVersion.",
                e
            );
        }
        var Y = {
                DISABLED: "disabled",
                DIVIDER: "divider",
                SHOW: "open",
                DROPUP: "dropup",
                MENU: "dropdown-menu",
                MENURIGHT: "dropdown-menu-right",
                MENULEFT: "dropdown-menu-left",
                BUTTONCLASS: "btn-default",
                POPOVERHEADER: "popover-title",
            },
            A = { MENU: "." + Y.MENU };
        "4" === _.major && ((Y.DIVIDER = "dropdown-divider"), (Y.SHOW = "show"), (Y.BUTTONCLASS = "btn-round btn-simple"), (Y.POPOVERHEADER = "popover-header"));
        var N = new RegExp(H + "|" + L),
            P = new RegExp("^" + D + "$|" + C),
            a =
                (new RegExp(T + "|" + z),
                function (e, t) {
                    var i = this;
                    s.useDefault || ((j.valHooks.select.set = s._set), (s.useDefault = !0)),
                        (this.$element = j(e)),
                        (this.$newElement = null),
                        (this.$button = null),
                        (this.$menu = null),
                        (this.options = t),
                        (this.selectpicker = {
                            main: { map: { newIndex: {}, originalIndex: {} } },
                            current: { map: {} },
                            search: { map: {} },
                            view: {},
                            keydown: {
                                keyHistory: "",
                                resetKeyHistory: {
                                    start: function () {
                                        return setTimeout(function () {
                                            i.selectpicker.keydown.keyHistory = "";
                                        }, 800);
                                    },
                                },
                            },
                        }),
                        null === this.options.title && (this.options.title = this.$element.attr("title"));
                    var n = this.options.windowPadding;
                    "number" == typeof n && (this.options.windowPadding = [n, n, n, n]),
                        (this.val = a.prototype.val),
                        (this.render = a.prototype.render),
                        (this.refresh = a.prototype.refresh),
                        (this.setStyle = a.prototype.setStyle),
                        (this.selectAll = a.prototype.selectAll),
                        (this.deselectAll = a.prototype.deselectAll),
                        (this.destroy = a.prototype.destroy),
                        (this.remove = a.prototype.remove),
                        (this.show = a.prototype.show),
                        (this.hide = a.prototype.hide),
                        this.init();
                });
        function l(e) {
            var o,
                r = arguments,
                l = e;
            if (([].shift.apply(r), !_.success)) {
                try {
                    _.full = (j.fn.dropdown.Constructor.VERSION || "").split(" ")[0].split(".");
                } catch (e) {
                    _.full = a.BootstrapVersion.split(" ")[0].split(".");
                }
                (_.major = _.full[0]),
                    (_.success = !0),
                    "4" === _.major && ((Y.DIVIDER = "dropdown-divider"), (Y.SHOW = "show"), (Y.BUTTONCLASS = "btn-round btn-simple"), (a.DEFAULTS.style = Y.BUTTONCLASS = "btn-round btn-simple"), (Y.POPOVERHEADER = "popover-header"));
            }
            var t = this.each(function () {
                var e = j(this);
                if (e.is("select1")) {
                    var t = e.data("selectpicker"),
                        i = "object" == typeof l && l;
                    if (t) {
                        if (i) for (var n in i) i.hasOwnProperty(n) && (t.options[n] = i[n]);
                    } else {
                        var s = j.extend({}, a.DEFAULTS, j.fn.selectpicker.defaults || {}, e.data(), i);
                        (s.template = j.extend({}, a.DEFAULTS.template, j.fn.selectpicker.defaults ? j.fn.selectpicker.defaults.template : {}, e.data().template, i.template)), e.data("selectpicker", (t = new a(this, s)));
                    }
                    "string" == typeof l && (o = t[l] instanceof Function ? t[l].apply(t, r) : t.options[l]);
                }
            });
            return void 0 !== o ? o : t;
        }
        (a.VERSION = "1.13.2"),
            (a.BootstrapVersion = _.major),
            (a.DEFAULTS = {
                noneSelectedText: "Nothing selected",
                noneResultsText: "No results matched {0}",
                countSelectedText: function (e, t) {
                    return 1 == e ? "{0} item selected" : "{0} items selected";
                },
                maxOptionsText: function (e, t) {
                    return [1 == e ? "Limit reached ({n} item max)" : "Limit reached ({n} items max)", 1 == t ? "Group limit reached ({n} item max)" : "Group limit reached ({n} items max)"];
                },
                selectAllText: "Select All",
                deselectAllText: "Deselect All",
                doneButton: !1,
                doneButtonText: "Close",
                multipleSeparator: ", ",
                styleBase: "btn",
                style: Y.BUTTONCLASS,
                size: "auto",
                title: null,
                selectedTextFormat: "values",
                width: !1,
                container: !1,
                hideDisabled: !1,
                showSubtext: !1,
                showIcon: !0,
                showContent: !0,
                dropupAuto: !0,
                header: !1,
                liveSearch: !1,
                liveSearchPlaceholder: null,
                liveSearchNormalize: !1,
                liveSearchStyle: "contains",
                actionsBox: !1,
                iconBase: "glyphicon",
                tickIcon: "glyphicon-ok",
                showTick: !1,
                template: { caret: '<span class="caret"></span>' },
                maxOptions: !1,
                mobile: !1,
                selectOnTab: !1,
                dropdownAlignRight: !1,
                windowPadding: 0,
                virtualScroll: 600,
                display: !1,
            }),
            "4" === _.major && ((a.DEFAULTS.style = "btn-round btn-simple"), (a.DEFAULTS.iconBase = ""), (a.DEFAULTS.tickIcon = "bs-ok-default")),
            (a.prototype = {
                constructor: a,
                init: function () {
                    var i = this,
                        e = this.$element.attr("id");
                    this.$element.addClass("bs-select-hidden"),
                        (this.multiple = this.$element.prop("multiple")),
                        (this.autofocus = this.$element.prop("autofocus")),
                        (this.$newElement = this.createDropdown()),
                        this.createLi(),
                        this.$element.after(this.$newElement).prependTo(this.$newElement),
                        (this.$button = this.$newElement.children("button")),
                        (this.$menu = this.$newElement.children(A.MENU)),
                        (this.$menuInner = this.$menu.children(".inner")),
                        (this.$searchbox = this.$menu.find("input")),
                        this.$element.removeClass("bs-select-hidden"),
                        !0 === this.options.dropdownAlignRight && this.$menu.addClass(Y.MENURIGHT),
                        void 0 !== e && this.$button.attr("data-id", e),
                        this.checkDisabled(),
                        this.clickListener(),
                        this.options.liveSearch && this.liveSearchListener(),
                        this.render(),
                        this.setStyle(),
                        this.setWidth(),
                        this.options.container
                            ? this.selectPosition()
                            : this.$element.on("hide.bs.select1", function () {
                                  if (i.isVirtual()) {
                                      var e = i.$menuInner[0],
                                          t = e.firstChild.cloneNode(!1);
                                      e.replaceChild(t, e.firstChild), (e.scrollTop = 0);
                                  }
                              }),
                        this.$menu.data("this", this),
                        this.$newElement.data("this", this),
                        this.options.mobile && this.mobile(),
                        this.$newElement.on({
                            "hide.bs.dropdown": function (e) {
                                i.$menuInner.attr("aria-expanded", !1), i.$element.trigger("hide.bs.select1", e);
                            },
                            "hidden.bs.dropdown": function (e) {
                                i.$element.trigger("hidden.bs.select1", e);
                            },
                            "show.bs.dropdown": function (e) {
                                i.$menuInner.attr("aria-expanded", !0), i.$element.trigger("show.bs.select1", e);
                            },
                            "shown.bs.dropdown": function (e) {
                                i.$element.trigger("shown.bs.select1", e);
                            },
                        }),
                        i.$element[0].hasAttribute("required") &&
                            this.$element.on("invalid", function () {
                                i.$button.addClass("bs-invalid"),
                                    i.$element.on({
                                        "shown.bs.select1": function () {
                                            i.$element.val(i.$element.val()).off("shown.bs.select1");
                                        },
                                        "rendered.bs.select1": function () {
                                            this.validity.valid && i.$button.removeClass("bs-invalid"), i.$element.off("rendered.bs.select1");
                                        },
                                    }),
                                    i.$button.on("blur.bs.select1", function () {
                                        i.$element.focus().blur(), i.$button.off("blur.bs.select1");
                                    });
                            }),
                        setTimeout(function () {
                            i.$element.trigger("loaded.bs.select1");
                        });
                },
                createDropdown: function () {
                    var e = this.multiple || this.options.showTick ? " show-tick" : "",
                        t = this.autofocus ? " autofocus" : "",
                        i = this.options.header ? '<div class="' + Y.POPOVERHEADER + '"><button type="button" class="close" aria-hidden="true">&times;</button>' + this.options.header + "</div>" : "",
                        n = this.options.liveSearch
                            ? '<div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"' +
                              (null === this.options.liveSearchPlaceholder ? "" : ' placeholder="' + q(this.options.liveSearchPlaceholder) + '"') +
                              ' role="textbox" aria-label="Search"></div>'
                            : "",
                        s =
                            this.multiple && this.options.actionsBox
                                ? '<div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn ' +
                                  Y.BUTTONCLASS +
                                  '">' +
                                  this.options.selectAllText +
                                  '</button><button type="button" class="actions-btn bs-deselect-all btn ' +
                                  Y.BUTTONCLASS +
                                  '">' +
                                  this.options.deselectAllText +
                                  "</button></div></div>"
                                : "",
                        o =
                            this.multiple && this.options.doneButton
                                ? '<div class="bs-donebutton"><div class="btn-group btn-block"><button type="button" class="btn btn-sm ' + Y.BUTTONCLASS + '">' + this.options.doneButtonText + "</button></div></div>"
                                : "",
                        r =
                            '<div class="dropdown bootstrap-select' +
                            e +
                            '"><button type="button" class="' +
                            this.options.styleBase +
                            ' dropdown-toggle" ' +
                            ("static" === this.options.display ? 'data-display="static"' : "") +
                            'data-toggle="dropdown"' +
                            t +
                            ' role="button"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner"></div></div> </div>' +
                            ("4" === _.major ? "" : '<span class="bs-caret">' + this.options.template.caret + "</span>") +
                            '</button><div class="' +
                            Y.MENU +
                            " " +
                            ("4" === _.major ? "" : Y.SHOW) +
                            '" role="combobox">' +
                            i +
                            n +
                            s +
                            '<div class="inner ' +
                            Y.SHOW +
                            '" role="listbox" aria-expanded="false" tabindex="-1"><ul class="' +
                            Y.MENU +
                            " inner " +
                            ("4" === _.major ? Y.SHOW : "") +
                            '"></ul></div>' +
                            o +
                            "</div></div>";
                    return j(r);
                },
                setPositionData: function () {
                    this.selectpicker.view.canHighlight = [];
                    for (var e = 0; e < this.selectpicker.current.data.length; e++) {
                        var t = this.selectpicker.current.data[e],
                            i = !0;
                        "divider" === t.type ? ((i = !1), (t.height = this.sizeInfo.dividerHeight)) : "optgroup-label" === t.type ? ((i = !1), (t.height = this.sizeInfo.dropdownHeaderHeight)) : (t.height = this.sizeInfo.liHeight),
                            t.disabled && (i = !1),
                            this.selectpicker.view.canHighlight.push(i),
                            (t.position = (0 === e ? 0 : this.selectpicker.current.data[e - 1].position) + t.height);
                    }
                },
                isVirtual: function () {
                    return (!1 !== this.options.virtualScroll && this.selectpicker.main.elements.length >= this.options.virtualScroll) || !0 === this.options.virtualScroll;
                },
                createView: function (C, e) {
                    e = e || 0;
                    var O = this;
                    this.selectpicker.current = C ? this.selectpicker.search : this.selectpicker.main;
                    var T,
                        z,
                        D = [];
                    function i(e, t) {
                        var i,
                            n,
                            s,
                            o,
                            r,
                            l,
                            a,
                            c,
                            d,
                            h = O.selectpicker.current.elements.length,
                            p = [],
                            u = void 0,
                            f = !0,
                            m = O.isVirtual();
                        (O.selectpicker.view.scrollTop = e),
                            !0 === m &&
                                O.sizeInfo.hasScrollBar &&
                                O.$menu[0].offsetWidth > O.sizeInfo.totalMenuWidth &&
                                ((O.sizeInfo.menuWidth = O.$menu[0].offsetWidth), (O.sizeInfo.totalMenuWidth = O.sizeInfo.menuWidth + O.sizeInfo.scrollBarWidth), O.$menu.css("min-width", O.sizeInfo.menuWidth)),
                            (i = Math.ceil((O.sizeInfo.menuInnerHeight / O.sizeInfo.liHeight) * 1.5)),
                            (n = Math.round(h / i) || 1);
                        for (var v = 0; v < n; v++) {
                            var g = (v + 1) * i;
                            if ((v === n - 1 && (g = h), (p[v] = [v * i + (v ? 1 : 0), g]), !h)) break;
                            void 0 === u && e <= O.selectpicker.current.data[g - 1].position - O.sizeInfo.menuInnerHeight && (u = v);
                        }
                        if (
                            (void 0 === u && (u = 0),
                            (r = [O.selectpicker.view.position0, O.selectpicker.view.position1]),
                            (s = Math.max(0, u - 1)),
                            (o = Math.min(n - 1, u + 1)),
                            (O.selectpicker.view.position0 = Math.max(0, p[s][0]) || 0),
                            (O.selectpicker.view.position1 = Math.min(h, p[o][1]) || 0),
                            (l = r[0] !== O.selectpicker.view.position0 || r[1] !== O.selectpicker.view.position1),
                            void 0 !== O.activeIndex &&
                                ((z = O.selectpicker.current.elements[O.selectpicker.current.map.newIndex[O.prevActiveIndex]]),
                                (D = O.selectpicker.current.elements[O.selectpicker.current.map.newIndex[O.activeIndex]]),
                                (T = O.selectpicker.current.elements[O.selectpicker.current.map.newIndex[O.selectedIndex]]),
                                t && (O.activeIndex !== O.selectedIndex && (D.classList.remove("active"), D.firstChild && D.firstChild.classList.remove("active")), (O.activeIndex = void 0)),
                                O.activeIndex && O.activeIndex !== O.selectedIndex && T && T.length && (T.classList.remove("active"), T.firstChild && T.firstChild.classList.remove("active"))),
                            void 0 !== O.prevActiveIndex &&
                                O.prevActiveIndex !== O.activeIndex &&
                                O.prevActiveIndex !== O.selectedIndex &&
                                z &&
                                z.length &&
                                (z.classList.remove("active"), z.firstChild && z.firstChild.classList.remove("active")),
                            (t || l) &&
                                ((a = O.selectpicker.view.visibleElements ? O.selectpicker.view.visibleElements.slice() : []),
                                (O.selectpicker.view.visibleElements = O.selectpicker.current.elements.slice(O.selectpicker.view.position0, O.selectpicker.view.position1)),
                                O.setOptionStatus(),
                                (C || (!1 === m && t)) &&
                                    ((c = a),
                                    (d = O.selectpicker.view.visibleElements),
                                    (f = !(
                                        c.length === d.length &&
                                        c.every(function (e, t) {
                                            return e === d[t];
                                        })
                                    ))),
                                (t || !0 === m) && f))
                        ) {
                            var b,
                                w,
                                x = O.$menuInner[0],
                                I = document.createDocumentFragment(),
                                k = x.firstChild.cloneNode(!1),
                                y = !0 === m ? O.selectpicker.view.visibleElements : O.selectpicker.current.elements;
                            x.replaceChild(k, x.firstChild);
                            v = 0;
                            for (var E = y.length; v < E; v++) I.appendChild(y[v]);
                            !0 === m &&
                                ((b = 0 === O.selectpicker.view.position0 ? 0 : O.selectpicker.current.data[O.selectpicker.view.position0 - 1].position),
                                (w = O.selectpicker.view.position1 > h - 1 ? 0 : O.selectpicker.current.data[h - 1].position - O.selectpicker.current.data[O.selectpicker.view.position1 - 1].position),
                                (x.firstChild.style.marginTop = b + "px"),
                                (x.firstChild.style.marginBottom = w + "px")),
                                x.firstChild.appendChild(I);
                        }
                        if (((O.prevActiveIndex = O.activeIndex), O.options.liveSearch)) {
                            if (C && t) {
                                var $,
                                    S = 0;
                                O.selectpicker.view.canHighlight[S] || (S = 1 + O.selectpicker.view.canHighlight.slice(1).indexOf(!0)),
                                    ($ = O.selectpicker.view.visibleElements[S]),
                                    O.selectpicker.view.currentActive &&
                                        (O.selectpicker.view.currentActive.classList.remove("active"), O.selectpicker.view.currentActive.firstChild && O.selectpicker.view.currentActive.firstChild.classList.remove("active")),
                                    $ && ($.classList.add("active"), $.firstChild && $.firstChild.classList.add("active")),
                                    (O.activeIndex = O.selectpicker.current.map.originalIndex[S]);
                            }
                        } else O.$menuInner.focus();
                    }
                    this.setPositionData(),
                        i(e, !0),
                        this.$menuInner.off("scroll.createView").on("scroll.createView", function (e, t) {
                            O.noScroll || i(this.scrollTop, t), (O.noScroll = !1);
                        }),
                        j(window)
                            .off("resize.createView")
                            .on("resize.createView", function () {
                                i(O.$menuInner[0].scrollTop);
                            });
                },
                createLi: function () {
                    var T,
                        z = this,
                        D = [],
                        H = 0,
                        L = 0,
                        A = [],
                        N = 0,
                        P = 0,
                        R = -1;
                    this.selectpicker.view.titleOption || (this.selectpicker.view.titleOption = document.createElement("option"));
                    var B = { span: document.createElement("span"), subtext: document.createElement("small"), a: document.createElement("a"), li: document.createElement("li"), whitespace: document.createTextNode(" ") },
                        e = B.span.cloneNode(!1),
                        W = document.createDocumentFragment();
                    (e.className = z.options.iconBase + " " + z.options.tickIcon + " check-mark"),
                        B.a.appendChild(e),
                        B.a.setAttribute("role", "option"),
                        (B.subtext.className = "text-muted"),
                        (B.text = B.span.cloneNode(!1)),
                        (B.text.className = "text");
                    var M = function (e, t, i, n) {
                            var s = B.li.cloneNode(!1);
                            return e && (1 === e.nodeType || 11 === e.nodeType ? s.appendChild(e) : (s.innerHTML = e)), void 0 !== i && "" !== i && (s.className = i), null != n && s.classList.add("optgroup-" + n), s;
                        },
                        F = function (e, t, i) {
                            var n = B.a.cloneNode(!0);
                            return (
                                e && (11 === e.nodeType ? n.appendChild(e) : n.insertAdjacentHTML("beforeend", e)),
                                (void 0 !== t) & ("" !== t) && (n.className = t),
                                "4" === _.major && n.classList.add("dropdown-item"),
                                i && n.setAttribute("style", i),
                                n
                            );
                        },
                        V = function (e) {
                            var t,
                                i,
                                n = B.text.cloneNode(!1);
                            if (e.optionContent) n.innerHTML = e.optionContent;
                            else {
                                if (((n.textContent = e.text), e.optionIcon)) {
                                    var s = B.whitespace.cloneNode(!1);
                                    ((i = B.span.cloneNode(!1)).className = z.options.iconBase + " " + e.optionIcon), W.appendChild(i), W.appendChild(s);
                                }
                                e.optionSubtext && (((t = B.subtext.cloneNode(!1)).innerHTML = e.optionSubtext), n.appendChild(t));
                            }
                            return W.appendChild(n), W;
                        };
                    if (this.options.title && !this.multiple) {
                        R--;
                        var t = this.$element[0],
                            i = !1,
                            n = !this.selectpicker.view.titleOption.parentNode;
                        if (n)
                            (this.selectpicker.view.titleOption.className = "bs-title-option"),
                                (this.selectpicker.view.titleOption.value = ""),
                                (i = void 0 === j(t.options[t.selectedIndex]).attr("selected") && void 0 === this.$element.data("selected"));
                        (n || 0 !== this.selectpicker.view.titleOption.index) && t.insertBefore(this.selectpicker.view.titleOption, t.firstChild), i && (t.selectedIndex = 0);
                    }
                    var U = this.$element.find("option");
                    U.each(function (e) {
                        var t = j(this);
                        if ((R++, !t.hasClass("bs-title-option"))) {
                            var i,
                                n,
                                s = t.data(),
                                o = this.className || "",
                                r = q(this.style.cssText),
                                l = s.content,
                                a = this.textContent,
                                c = s.tokens,
                                d = s.subtext,
                                h = s.icon,
                                p = t.parent(),
                                u = p[0],
                                f = "OPTGROUP" === u.tagName,
                                m = f && u.disabled,
                                v = this.disabled || m,
                                g = this.previousElementSibling && "OPTGROUP" === this.previousElementSibling.tagName,
                                b = p.data();
                            if (!0 === s.hidden || (z.options.hideDisabled && ((v && !f) || m))) {
                                (i = s.prevHiddenIndex),
                                    t.next().data("prevHiddenIndex", void 0 !== i ? i : e),
                                    R--,
                                    g || (void 0 !== i && (S = U[i].previousElementSibling) && "OPTGROUP" === S.tagName && !S.disabled && (g = !0)),
                                    g && "divider" !== A[A.length - 1].type && (R++, D.push(M(!1, 0, Y.DIVIDER, N + "div")), A.push({ type: "divider", optID: N }));
                            } else {
                                if (f && !0 !== s.divider) {
                                    if (z.options.hideDisabled && v) {
                                        if (void 0 === b.allOptionsDisabled) {
                                            var w = p.children();
                                            p.data("allOptionsDisabled", w.filter(":disabled").length === w.length);
                                        }
                                        if (p.data("allOptionsDisabled")) return void R--;
                                    }
                                    var x = " " + u.className || "";
                                    if (!this.previousElementSibling) {
                                        N += 1;
                                        var I = u.label,
                                            k = q(I),
                                            y = b.subtext,
                                            E = b.icon;
                                        0 !== e && 0 < D.length && (R++, D.push(M(!1, 0, Y.DIVIDER, N + "div")), A.push({ type: "divider", optID: N })), R++;
                                        var $ = (function (e) {
                                            var t,
                                                i,
                                                n = B.text.cloneNode(!1);
                                            if (((n.innerHTML = e.labelEscaped), e.labelIcon)) {
                                                var s = B.whitespace.cloneNode(!1);
                                                ((i = B.span.cloneNode(!1)).className = z.options.iconBase + " " + e.labelIcon), W.appendChild(i), W.appendChild(s);
                                            }
                                            return e.labelSubtext && (((t = B.subtext.cloneNode(!1)).textContent = e.labelSubtext), n.appendChild(t)), W.appendChild(n), W;
                                        })({ labelEscaped: k, labelSubtext: y, labelIcon: E });
                                        D.push(M($, 0, "dropdown-header" + x, N)), A.push({ content: k, subtext: y, type: "optgroup-label", optID: N }), (P = R - 1);
                                    }
                                    if ((z.options.hideDisabled && v) || !0 === s.hidden) return void R--;
                                    (n = V({ text: a, optionContent: l, optionSubtext: d, optionIcon: h })),
                                        D.push(M(F(n, "opt " + o + x, r), 0, "", N)),
                                        A.push({ content: l || a, subtext: d, tokens: c, type: "option", optID: N, headerIndex: P, lastIndex: P + u.childElementCount, originalIndex: e, data: s }),
                                        H++;
                                } else if (!0 === s.divider) D.push(M(!1, 0, Y.DIVIDER)), A.push({ type: "divider", originalIndex: e, data: s });
                                else {
                                    var S;
                                    if (!g && z.options.hideDisabled) if (void 0 !== (i = s.prevHiddenIndex)) (S = U[i].previousElementSibling) && "OPTGROUP" === S.tagName && !S.disabled && (g = !0);
                                    g && "divider" !== A[A.length - 1].type && (R++, D.push(M(!1, 0, Y.DIVIDER, N + "div")), A.push({ type: "divider", optID: N })),
                                        (n = V({ text: a, optionContent: l, optionSubtext: d, optionIcon: h })),
                                        D.push(M(F(n, o, r))),
                                        A.push({ content: l || a, subtext: d, tokens: c, type: "option", originalIndex: e, data: s }),
                                        H++;
                                }
                                (z.selectpicker.main.map.newIndex[e] = R), (z.selectpicker.main.map.originalIndex[R] = e);
                                var C = A[A.length - 1];
                                C.disabled = v;
                                var O = 0;
                                C.content && (O += C.content.length), C.subtext && (O += C.subtext.length), h && (O += 1), L < O && ((L = O), (T = D[D.length - 1]));
                            }
                        }
                    }),
                        (this.selectpicker.main.elements = D),
                        (this.selectpicker.main.data = A),
                        (this.selectpicker.current = this.selectpicker.main),
                        (this.selectpicker.view.widestOption = T),
                        (this.selectpicker.view.availableOptionsCount = H);
                },
                findLis: function () {
                    return this.$menuInner.find(".inner > li");
                },
                render: function () {
                    var e = this,
                        t = this.$element.find("option"),
                        i = [],
                        n = [];
                    this.togglePlaceholder(), this.tabIndex();
                    for (var s = 0, o = this.selectpicker.main.elements.length; s < o; s++) {
                        var r = t[this.selectpicker.main.map.originalIndex[s]];
                        if (r && r.selected && (i.push(r), (n.length < 100 && "count" !== e.options.selectedTextFormat) || 1 === i.length)) {
                            if (e.options.hideDisabled && (r.disabled || ("OPTGROUP" === r.parentNode.tagName && r.parentNode.disabled))) return;
                            var l,
                                a,
                                c = this.selectpicker.main.data[s].data,
                                d = c.icon && e.options.showIcon ? '<i class="' + e.options.iconBase + " " + c.icon + '"></i> ' : "";
                            (l = e.options.showSubtext && c.subtext && !e.multiple ? ' <small class="text-muted">' + c.subtext + "</small>" : ""),
                                (a = r.title ? r.title : c.content && e.options.showContent ? c.content.toString() : d + r.innerHTML.trim() + l),
                                n.push(a);
                        }
                    }
                    var h = this.multiple ? n.join(this.options.multipleSeparator) : n[0];
                    if ((50 < i.length && (h += "..."), this.multiple && -1 !== this.options.selectedTextFormat.indexOf("count"))) {
                        var p = this.options.selectedTextFormat.split(">");
                        if ((1 < p.length && i.length > p[1]) || (1 === p.length && 2 <= i.length)) {
                            var u = this.selectpicker.view.availableOptionsCount;
                            h = ("function" == typeof this.options.countSelectedText ? this.options.countSelectedText(i.length, u) : this.options.countSelectedText).replace("{0}", i.length.toString()).replace("{1}", u.toString());
                        }
                    }
                    null == this.options.title && (this.options.title = this.$element.attr("title")),
                        "static" == this.options.selectedTextFormat && (h = this.options.title),
                        h || (h = void 0 !== this.options.title ? this.options.title : this.options.noneSelectedText),
                        (this.$button[0].title = f(h.replace(/<[^>]*>?/g, "").trim())),
                        (this.$button.find(".filter-option-inner-inner")[0].innerHTML = h),
                        this.$element.trigger("rendered.bs.select1");
                },
                setStyle: function (e, t) {
                    this.$element.attr("class") && this.$newElement.addClass(this.$element.attr("class").replace(/selectpicker|mobile-device|bs-select-hidden|validate\[.*\]/gi, ""));
                    var i = e || this.options.style;
                    "add" == t ? this.$button.addClass(i) : "remove" == t ? this.$button.removeClass(i) : (this.$button.removeClass(this.options.style), this.$button.addClass(i));
                },
                liHeight: function (e) {
                    if (e || (!1 !== this.options.size && !this.sizeInfo)) {
                        this.sizeInfo || (this.sizeInfo = {});
                        var t = document.createElement("div"),
                            i = document.createElement("div"),
                            n = document.createElement("div"),
                            s = document.createElement("ul"),
                            o = document.createElement("li"),
                            r = document.createElement("li"),
                            l = document.createElement("li"),
                            a = document.createElement("a"),
                            c = document.createElement("span"),
                            d = this.options.header && 0 < this.$menu.find("." + Y.POPOVERHEADER).length ? this.$menu.find("." + Y.POPOVERHEADER)[0].cloneNode(!0) : null,
                            h = this.options.liveSearch ? document.createElement("div") : null,
                            p = this.options.actionsBox && this.multiple && 0 < this.$menu.find(".bs-actionsbox").length ? this.$menu.find(".bs-actionsbox")[0].cloneNode(!0) : null,
                            u = this.options.doneButton && this.multiple && 0 < this.$menu.find(".bs-donebutton").length ? this.$menu.find(".bs-donebutton")[0].cloneNode(!0) : null;
                        if (
                            ((this.sizeInfo.selectWidth = this.$newElement[0].offsetWidth),
                            (c.className = "text"),
                            (a.className = "dropdown-item " + this.$element.find("option")[0].className),
                            (t.className = this.$menu[0].parentNode.className + " " + Y.SHOW),
                            (t.style.width = this.sizeInfo.selectWidth + "px"),
                            "auto" === this.options.width && (i.style.minWidth = 0),
                            (i.className = Y.MENU + " " + Y.SHOW),
                            (n.className = "inner " + Y.SHOW),
                            (s.className = Y.MENU + " inner " + ("4" === _.major ? Y.SHOW : "")),
                            (o.className = Y.DIVIDER),
                            (r.className = "dropdown-header"),
                            c.appendChild(document.createTextNode("Inner text")),
                            a.appendChild(c),
                            l.appendChild(a),
                            r.appendChild(c.cloneNode(!0)),
                            this.selectpicker.view.widestOption && s.appendChild(this.selectpicker.view.widestOption.cloneNode(!0)),
                            s.appendChild(l),
                            s.appendChild(o),
                            s.appendChild(r),
                            d && i.appendChild(d),
                            h)
                        ) {
                            var f = document.createElement("input");
                            (h.className = "bs-searchbox"), (f.className = "form-control"), h.appendChild(f), i.appendChild(h);
                        }
                        p && i.appendChild(p), n.appendChild(s), i.appendChild(n), u && i.appendChild(u), t.appendChild(i), document.body.appendChild(t);
                        var m,
                            v = a.offsetHeight,
                            g = r ? r.offsetHeight : 0,
                            b = d ? d.offsetHeight : 0,
                            w = h ? h.offsetHeight : 0,
                            x = p ? p.offsetHeight : 0,
                            I = u ? u.offsetHeight : 0,
                            k = j(o).outerHeight(!0),
                            y = !!window.getComputedStyle && window.getComputedStyle(i),
                            E = i.offsetWidth,
                            $ = y ? null : j(i),
                            S = {
                                vert: O(y ? y.paddingTop : $.css("paddingTop")) + O(y ? y.paddingBottom : $.css("paddingBottom")) + O(y ? y.borderTopWidth : $.css("borderTopWidth")) + O(y ? y.borderBottomWidth : $.css("borderBottomWidth")),
                                horiz:
                                    O(y ? y.paddingLeft : $.css("paddingLeft")) + O(y ? y.paddingRight : $.css("paddingRight")) + O(y ? y.borderLeftWidth : $.css("borderLeftWidth")) + O(y ? y.borderRightWidth : $.css("borderRightWidth")),
                            },
                            C = {
                                vert: S.vert + O(y ? y.marginTop : $.css("marginTop")) + O(y ? y.marginBottom : $.css("marginBottom")) + 2,
                                horiz: S.horiz + O(y ? y.marginLeft : $.css("marginLeft")) + O(y ? y.marginRight : $.css("marginRight")) + 2,
                            };
                        (n.style.overflowY = "scroll"),
                            (m = i.offsetWidth - E),
                            document.body.removeChild(t),
                            (this.sizeInfo.liHeight = v),
                            (this.sizeInfo.dropdownHeaderHeight = g),
                            (this.sizeInfo.headerHeight = b),
                            (this.sizeInfo.searchHeight = w),
                            (this.sizeInfo.actionsHeight = x),
                            (this.sizeInfo.doneButtonHeight = I),
                            (this.sizeInfo.dividerHeight = k),
                            (this.sizeInfo.menuPadding = S),
                            (this.sizeInfo.menuExtras = C),
                            (this.sizeInfo.menuWidth = E),
                            (this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth),
                            (this.sizeInfo.scrollBarWidth = m),
                            (this.sizeInfo.selectHeight = this.$newElement[0].offsetHeight),
                            this.setPositionData();
                    }
                },
                getSelectPosition: function () {
                    var e,
                        t = j(window),
                        i = this.$newElement.offset(),
                        n = j(this.options.container);
                    this.options.container && !n.is("body") ? (((e = n.offset()).top += parseInt(n.css("borderTopWidth"))), (e.left += parseInt(n.css("borderLeftWidth")))) : (e = { top: 0, left: 0 });
                    var s = this.options.windowPadding;
                    (this.sizeInfo.selectOffsetTop = i.top - e.top - t.scrollTop()),
                        (this.sizeInfo.selectOffsetBot = t.height() - this.sizeInfo.selectOffsetTop - this.sizeInfo.selectHeight - e.top - s[2]),
                        (this.sizeInfo.selectOffsetLeft = i.left - e.left - t.scrollLeft()),
                        (this.sizeInfo.selectOffsetRight = t.width() - this.sizeInfo.selectOffsetLeft - this.sizeInfo.selectWidth - e.left - s[1]),
                        (this.sizeInfo.selectOffsetTop -= s[0]),
                        (this.sizeInfo.selectOffsetLeft -= s[3]);
                },
                setMenuSize: function (e) {
                    this.getSelectPosition();
                    var t,
                        i,
                        n,
                        s,
                        o,
                        r,
                        l,
                        a = this.sizeInfo.selectWidth,
                        c = this.sizeInfo.liHeight,
                        d = this.sizeInfo.headerHeight,
                        h = this.sizeInfo.searchHeight,
                        p = this.sizeInfo.actionsHeight,
                        u = this.sizeInfo.doneButtonHeight,
                        f = this.sizeInfo.dividerHeight,
                        m = this.sizeInfo.menuPadding,
                        v = 0;
                    if (
                        (this.options.dropupAuto &&
                            ((l = c * this.selectpicker.current.elements.length + m.vert),
                            this.$newElement.toggleClass(Y.DROPUP, this.sizeInfo.selectOffsetTop - this.sizeInfo.selectOffsetBot > this.sizeInfo.menuExtras.vert && l + this.sizeInfo.menuExtras.vert + 50 > this.sizeInfo.selectOffsetBot)),
                        "auto" === this.options.size)
                    )
                        (s = 3 < this.selectpicker.current.elements.length ? 3 * this.sizeInfo.liHeight + this.sizeInfo.menuExtras.vert - 2 : 0),
                            (i = this.sizeInfo.selectOffsetBot - this.sizeInfo.menuExtras.vert),
                            (n = s + d + h + p + u),
                            (r = Math.max(s - m.vert, 0)),
                            this.$newElement.hasClass(Y.DROPUP) && (i = this.sizeInfo.selectOffsetTop - this.sizeInfo.menuExtras.vert),
                            (t = (o = i) - d - h - p - u - m.vert);
                    else if (this.options.size && "auto" != this.options.size && this.selectpicker.current.elements.length > this.options.size) {
                        for (var g = 0; g < this.options.size; g++) "divider" === this.selectpicker.current.data[g].type && v++;
                        (t = (i = c * this.options.size + v * f + m.vert) - m.vert), (o = i + d + h + p + u), (n = r = "");
                    }
                    "auto" === this.options.dropdownAlignRight && this.$menu.toggleClass(Y.MENURIGHT, this.sizeInfo.selectOffsetLeft > this.sizeInfo.selectOffsetRight && this.sizeInfo.selectOffsetRight < this.$menu[0].offsetWidth - a),
                        this.$menu.css({ "max-height": o + "px", overflow: "auto", "min-height": n + "px" }),
                        this.$menuInner.css({ "max-height": t + "px", "overflow-y": "auto", "min-height": r + "px" }),
                        (this.sizeInfo.menuInnerHeight = t),
                        this.selectpicker.current.data.length &&
                            this.selectpicker.current.data[this.selectpicker.current.data.length - 1].position > this.sizeInfo.menuInnerHeight &&
                            ((this.sizeInfo.hasScrollBar = !0), (this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth + this.sizeInfo.scrollBarWidth), this.$menu.css("min-width", this.sizeInfo.totalMenuWidth)),
                        this.dropdown && this.dropdown._popper && this.dropdown._popper.update();
                },
                setSize: function (e) {
                    if ((this.liHeight(e), this.options.header && this.$menu.css("padding-top", 0), !1 !== this.options.size)) {
                        var t,
                            i = this,
                            n = j(window),
                            s = 0;
                        this.setMenuSize(),
                            "auto" === this.options.size
                                ? (this.$searchbox.off("input.setMenuSize propertychange.setMenuSize").on("input.setMenuSize propertychange.setMenuSize", function () {
                                      return i.setMenuSize();
                                  }),
                                  n.off("resize.setMenuSize scroll.setMenuSize").on("resize.setMenuSize scroll.setMenuSize", function () {
                                      return i.setMenuSize();
                                  }))
                                : this.options.size &&
                                  "auto" != this.options.size &&
                                  this.selectpicker.current.elements.length > this.options.size &&
                                  (this.$searchbox.off("input.setMenuSize propertychange.setMenuSize"), n.off("resize.setMenuSize scroll.setMenuSize")),
                            e
                                ? (s = this.$menuInner[0].scrollTop)
                                : i.multiple ||
                                  ("number" == typeof (t = i.selectpicker.main.map.newIndex[i.$element[0].selectedIndex]) &&
                                      !1 !== i.options.size &&
                                      (s = (s = i.sizeInfo.liHeight * t) - i.sizeInfo.menuInnerHeight / 2 + i.sizeInfo.liHeight / 2)),
                            i.createView(!1, s);
                    }
                },
                setWidth: function () {
                    var i = this;
                    "auto" === this.options.width
                        ? requestAnimationFrame(function () {
                              i.$menu.css("min-width", "0"), i.liHeight(), i.setMenuSize();
                              var e = i.$newElement.clone().appendTo("body"),
                                  t = e.css("width", "auto").children("button").outerWidth();
                              e.remove(), (i.sizeInfo.selectWidth = Math.max(i.sizeInfo.totalMenuWidth, t)), i.$newElement.css("width", i.sizeInfo.selectWidth + "px");
                          })
                        : "fit" === this.options.width
                        ? (this.$menu.css("min-width", ""), this.$newElement.css("width", "").addClass("fit-width"))
                        : this.options.width
                        ? (this.$menu.css("min-width", ""), this.$newElement.css("width", this.options.width))
                        : (this.$menu.css("min-width", ""), this.$newElement.css("width", "")),
                        this.$newElement.hasClass("fit-width") && "fit" !== this.options.width && this.$newElement.removeClass("fit-width");
                },
                selectPosition: function () {
                    this.$bsContainer = j('<div class="bs-container" />');
                    var n,
                        s,
                        o,
                        r = this,
                        l = j(this.options.container),
                        e = function (e) {
                            var t = {},
                                i = r.options.display || j.fn.dropdown.Constructor.Default.display;
                            r.$bsContainer.addClass(e.attr("class").replace(/form-control|fit-width/gi, "")).toggleClass(Y.DROPUP, e.hasClass(Y.DROPUP)),
                                (n = e.offset()),
                                l.is("body") ? (s = { top: 0, left: 0 }) : (((s = l.offset()).top += parseInt(l.css("borderTopWidth")) - l.scrollTop()), (s.left += parseInt(l.css("borderLeftWidth")) - l.scrollLeft())),
                                (o = e.hasClass(Y.DROPUP) ? 0 : e[0].offsetHeight),
                                (_.major < 4 || "static" === i) && ((t.top = n.top - s.top + o), (t.left = n.left - s.left)),
                                (t.width = e[0].offsetWidth),
                                r.$bsContainer.css(t);
                        };
                    this.$button.on("click.bs.dropdown.data-api", function () {
                        r.isDisabled() || (e(r.$newElement), r.$bsContainer.appendTo(r.options.container).toggleClass(Y.SHOW, !r.$button.hasClass(Y.SHOW)).append(r.$menu));
                    }),
                        j(window).on("resize scroll", function () {
                            e(r.$newElement);
                        }),
                        this.$element.on("hide.bs.select1", function () {
                            r.$menu.data("height", r.$menu.height()), r.$bsContainer.detach();
                        });
                },
                setOptionStatus: function () {
                    var e = this,
                        t = this.$element.find("option");
                    if (((e.noScroll = !1), e.selectpicker.view.visibleElements && e.selectpicker.view.visibleElements.length))
                        for (var i = 0; i < e.selectpicker.view.visibleElements.length; i++) {
                            var n = e.selectpicker.current.map.originalIndex[i + e.selectpicker.view.position0],
                                s = t[n];
                            if (s) {
                                var o = this.selectpicker.main.map.newIndex[n],
                                    r = this.selectpicker.main.elements[o];
                                e.setDisabled(n, s.disabled || ("OPTGROUP" === s.parentNode.tagName && s.parentNode.disabled), o, r), e.setSelected(n, s.selected, o, r);
                            }
                        }
                },
                setSelected: function (e, t, i, n) {
                    var s,
                        o,
                        r,
                        l = void 0 !== this.activeIndex,
                        a = this.activeIndex === e || (t && !this.multiple && !l);
                    i || (i = this.selectpicker.main.map.newIndex[e]),
                        n || (n = this.selectpicker.main.elements[i]),
                        (r = n.firstChild),
                        t && (this.selectedIndex = e),
                        n.classList.toggle("selected", t),
                        n.classList.toggle("active", a),
                        a && ((this.selectpicker.view.currentActive = n), (this.activeIndex = e)),
                        r && (r.classList.toggle("selected", t), r.classList.toggle("active", a), r.setAttribute("aria-selected", t)),
                        a ||
                            (!l &&
                                t &&
                                void 0 !== this.prevActiveIndex &&
                                ((s = this.selectpicker.main.map.newIndex[this.prevActiveIndex]),
                                (o = this.selectpicker.main.elements[s]).classList.toggle("selected", t),
                                o.classList.remove("active"),
                                o.firstChild && (o.firstChild.classList.toggle("selected", t), o.firstChild.classList.remove("active"))));
                },
                setDisabled: function (e, t, i, n) {
                    var s;
                    i || (i = this.selectpicker.main.map.newIndex[e]),
                        n || (n = this.selectpicker.main.elements[i]),
                        (s = n.firstChild),
                        n.classList.toggle(Y.DISABLED, t),
                        s && ("4" === _.major && s.classList.toggle(Y.DISABLED, t), s.setAttribute("aria-disabled", t), t ? s.setAttribute("tabindex", -1) : s.setAttribute("tabindex", 0));
                },
                isDisabled: function () {
                    return this.$element[0].disabled;
                },
                checkDisabled: function () {
                    var e = this;
                    this.isDisabled()
                        ? (this.$newElement.addClass(Y.DISABLED), this.$button.addClass(Y.DISABLED).attr("tabindex", -1).attr("aria-disabled", !0))
                        : (this.$button.hasClass(Y.DISABLED) && (this.$newElement.removeClass(Y.DISABLED), this.$button.removeClass(Y.DISABLED).attr("aria-disabled", !1)),
                          -1 != this.$button.attr("tabindex") || this.$element.data("tabindex") || this.$button.removeAttr("tabindex")),
                        this.$button.click(function () {
                            return !e.isDisabled();
                        });
                },
                togglePlaceholder: function () {
                    var e = this.$element[0],
                        t = e.selectedIndex,
                        i = -1 === t;
                    i || e.options[t].value || (i = !0), this.$button.toggleClass("bs-placeholder", i);
                },
                tabIndex: function () {
                    this.$element.data("tabindex") !== this.$element.attr("tabindex") &&
                        -98 !== this.$element.attr("tabindex") &&
                        "-98" !== this.$element.attr("tabindex") &&
                        (this.$element.data("tabindex", this.$element.attr("tabindex")), this.$button.attr("tabindex", this.$element.data("tabindex"))),
                        this.$element.attr("tabindex", -98);
                },
                clickListener: function () {
                    var E = this,
                        t = j(document);
                    function e() {
                        E.options.liveSearch ? E.$searchbox.focus() : E.$menuInner.focus();
                    }
                    function i() {
                        E.dropdown && E.dropdown._popper && E.dropdown._popper.state.isCreated ? e() : requestAnimationFrame(i);
                    }
                    t.data("spaceSelect1", !1),
                        this.$button.on("keyup", function (e) {
                            /(32)/.test(e.keyCode.toString(10)) && t.data("spaceSelect1") && (e.preventDefault(), t.data("spaceSelect1", !1));
                        }),
                        this.$newElement.on("show.bs.dropdown", function () {
                            3 < _.major && !E.dropdown && ((E.dropdown = E.$button.data("bs.dropdown")), (E.dropdown._menu = E.$menu[0]));
                        }),
                        this.$button.on("click.bs.dropdown.data-api", function () {
                            E.$newElement.hasClass(Y.SHOW) || E.setSize();
                        }),
                        this.$element.on("shown.bs.select1", function () {
                            E.$menuInner[0].scrollTop !== E.selectpicker.view.scrollTop && (E.$menuInner[0].scrollTop = E.selectpicker.view.scrollTop), 3 < _.major ? requestAnimationFrame(i) : e();
                        }),
                        this.$menuInner.on("click", "li a", function (e, t) {
                            var i = j(this),
                                n = E.isVirtual() ? E.selectpicker.view.position0 : 0,
                                s = E.selectpicker.current.map.originalIndex[i.parent().index() + n],
                                o = $(E.$element[0]),
                                r = E.$element.prop("selectedIndex"),
                                l = !0;
                            if ((E.multiple && 1 !== E.options.maxOptions && e.stopPropagation(), e.preventDefault(), !E.isDisabled() && !i.parent().hasClass(Y.DISABLED))) {
                                var a = E.$element.find("option"),
                                    c = a.eq(s),
                                    d = c.prop("selected"),
                                    h = c.parent("optgroup"),
                                    p = h.find("option"),
                                    u = E.options.maxOptions,
                                    f = h.data("maxOptions") || !1;
                                if ((s === E.activeIndex && (t = !0), t || ((E.prevActiveIndex = E.activeIndex), (E.activeIndex = void 0)), E.multiple)) {
                                    if ((c.prop("selected", !d), E.setSelected(s, !d), i.blur(), !1 !== u || !1 !== f)) {
                                        var m = u < a.filter(":selected").length,
                                            v = f < h.find("option:selected").length;
                                        if ((u && m) || (f && v))
                                            if (u && 1 == u) {
                                                a.prop("selected", !1), c.prop("selected", !0);
                                                for (var g = 0; g < a.length; g++) E.setSelected(g, !1);
                                                E.setSelected(s, !0);
                                            } else if (f && 1 == f) {
                                                h.find("option:selected").prop("selected", !1), c.prop("selected", !0);
                                                for (g = 0; g < p.length; g++) {
                                                    var b = p[g];
                                                    E.setSelected(a.index(b), !1);
                                                }
                                                E.setSelected(s, !0);
                                            } else {
                                                var w = "string" == typeof E.options.maxOptionsText ? [E.options.maxOptionsText, E.options.maxOptionsText] : E.options.maxOptionsText,
                                                    x = "function" == typeof w ? w(u, f) : w,
                                                    I = x[0].replace("{n}", u),
                                                    k = x[1].replace("{n}", f),
                                                    y = j('<div class="notify"></div>');
                                                x[2] && ((I = I.replace("{var}", x[2][1 < u ? 0 : 1])), (k = k.replace("{var}", x[2][1 < f ? 0 : 1]))),
                                                    c.prop("selected", !1),
                                                    E.$menu.append(y),
                                                    u && m && (y.append(j("<div>" + I + "</div>")), (l = !1), E.$element.trigger("maxReached.bs.select1")),
                                                    f && v && (y.append(j("<div>" + k + "</div>")), (l = !1), E.$element.trigger("maxReachedGrp.bs.select1")),
                                                    setTimeout(function () {
                                                        E.setSelected(s, !1);
                                                    }, 10),
                                                    y.delay(750).fadeOut(300, function () {
                                                        j(this).remove();
                                                    });
                                            }
                                    }
                                } else a.prop("selected", !1), c.prop("selected", !0), E.setSelected(s, !0);
                                !E.multiple || (E.multiple && 1 === E.options.maxOptions) ? E.$button.focus() : E.options.liveSearch && E.$searchbox.focus(),
                                    l && ((o != $(E.$element[0]) && E.multiple) || (r != E.$element.prop("selectedIndex") && !E.multiple)) && ((S = [s, c.prop("selected"), o]), E.$element.triggerNative("change"));
                            }
                        }),
                        this.$menu.on("click", "li." + Y.DISABLED + " a, ." + Y.POPOVERHEADER + ", ." + Y.POPOVERHEADER + " :not(.close)", function (e) {
                            e.currentTarget == this && (e.preventDefault(), e.stopPropagation(), E.options.liveSearch && !j(e.target).hasClass("close") ? E.$searchbox.focus() : E.$button.focus());
                        }),
                        this.$menuInner.on("click", ".divider, .dropdown-header", function (e) {
                            e.preventDefault(), e.stopPropagation(), E.options.liveSearch ? E.$searchbox.focus() : E.$button.focus();
                        }),
                        this.$menu.on("click", "." + Y.POPOVERHEADER + " .close", function () {
                            E.$button.click();
                        }),
                        this.$searchbox.on("click", function (e) {
                            e.stopPropagation();
                        }),
                        this.$menu.on("click", ".actions-btn", function (e) {
                            E.options.liveSearch ? E.$searchbox.focus() : E.$button.focus(), e.preventDefault(), e.stopPropagation(), j(this).hasClass("bs-select-all") ? E.selectAll() : E.deselectAll();
                        }),
                        this.$element.on({
                            change: function () {
                                E.render(), E.$element.trigger("changed.bs.select1", S), (S = null);
                            },
                            focus: function () {
                                E.$button.focus();
                            },
                        });
                },
                liveSearchListener: function () {
                    var u = this,
                        f = document.createElement("li");
                    this.$button.on("click.bs.dropdown.data-api", function () {
                        u.$searchbox.val() && u.$searchbox.val("");
                    }),
                        this.$searchbox.on("click.bs.dropdown.data-api focus.bs.dropdown.data-api touchend.bs.dropdown.data-api", function (e) {
                            e.stopPropagation();
                        }),
                        this.$searchbox.on("input propertychange", function () {
                            var e = u.$searchbox.val();
                            if (((u.selectpicker.search.map.newIndex = {}), (u.selectpicker.search.map.originalIndex = {}), (u.selectpicker.search.elements = []), (u.selectpicker.search.data = []), e)) {
                                var t = [],
                                    i = e.toUpperCase(),
                                    n = {},
                                    s = [],
                                    o = u._searchStyle(),
                                    r = u.options.liveSearchNormalize;
                                u._$lisSelected = u.$menuInner.find(".selected");
                                for (var l = 0; l < u.selectpicker.main.data.length; l++) {
                                    var a = u.selectpicker.main.data[l];
                                    n[l] || (n[l] = y(a, i, o, r)),
                                        n[l] &&
                                            void 0 !== a.headerIndex &&
                                            -1 === s.indexOf(a.headerIndex) &&
                                            (0 < a.headerIndex && ((n[a.headerIndex - 1] = !0), s.push(a.headerIndex - 1)), (n[a.headerIndex] = !0), s.push(a.headerIndex), (n[a.lastIndex + 1] = !0)),
                                        n[l] && "optgroup-label" !== a.type && s.push(l);
                                }
                                l = 0;
                                for (var c = s.length; l < c; l++) {
                                    var d = s[l],
                                        h = s[l - 1],
                                        p = ((a = u.selectpicker.main.data[d]), u.selectpicker.main.data[h]);
                                    ("divider" !== a.type || ("divider" === a.type && p && "divider" !== p.type && c - 1 !== l)) &&
                                        (u.selectpicker.search.data.push(a),
                                        t.push(u.selectpicker.main.elements[d]),
                                        a.hasOwnProperty("originalIndex") && ((u.selectpicker.search.map.newIndex[a.originalIndex] = t.length - 1), (u.selectpicker.search.map.originalIndex[t.length - 1] = a.originalIndex)));
                                }
                                (u.activeIndex = void 0),
                                    (u.noScroll = !0),
                                    u.$menuInner.scrollTop(0),
                                    (u.selectpicker.search.elements = t),
                                    u.createView(!0),
                                    t.length || ((f.className = "no-results"), (f.innerHTML = u.options.noneResultsText.replace("{0}", '"' + q(e) + '"')), u.$menuInner[0].firstChild.appendChild(f));
                            } else u.$menuInner.scrollTop(0), u.createView(!1);
                        });
                },
                _searchStyle: function () {
                    return this.options.liveSearchStyle || "contains";
                },
                val: function (e) {
                    return void 0 !== e ? (this.$element.val(e).triggerNative("change"), this.$element) : this.$element.val();
                },
                changeAll: function (e) {
                    if (this.multiple) {
                        void 0 === e && (e = !0);
                        var t = this.$element.find("option"),
                            i = 0,
                            n = 0,
                            s = $(this.$element[0]);
                        this.$element.addClass("bs-select-hidden");
                        for (var o = 0; o < this.selectpicker.current.elements.length; o++) {
                            var r = this.selectpicker.current.data[o],
                                l = t[this.selectpicker.current.map.originalIndex[o]];
                            l && !l.disabled && "divider" !== r.type && (l.selected && i++, (l.selected = e), l.selected && n++);
                        }
                        this.$element.removeClass("bs-select-hidden"), i !== n && (this.setOptionStatus(), this.togglePlaceholder(), (S = [null, null, s]), this.$element.triggerNative("change"));
                    }
                },
                selectAll: function () {
                    return this.changeAll(!0);
                },
                deselectAll: function () {
                    return this.changeAll(!1);
                },
                toggle: function (e) {
                    (e = e || window.event) && e.stopPropagation(), this.$button.trigger("click.bs.dropdown.data-api");
                },
                keydown: function (e) {
                    var t,
                        i,
                        n,
                        s,
                        o,
                        r = j(this),
                        l = r.hasClass("dropdown-toggle"),
                        a = (l ? r.closest(".dropdown") : r.closest(A.MENU)).data("this"),
                        c = a.findLis(),
                        d = !1,
                        h = e.which === D && !l && !a.options.selectOnTab,
                        p = N.test(e.which) || h,
                        u = a.$menuInner[0].scrollTop,
                        f = a.isVirtual(),
                        m = !0 === f ? a.selectpicker.view.position0 : 0;
                    if (
                        (!(i = a.$newElement.hasClass(Y.SHOW)) && (p || (48 <= e.which && e.which <= 57) || (96 <= e.which && e.which <= 105) || (65 <= e.which && e.which <= 90)) && a.$button.trigger("click.bs.dropdown.data-api"),
                        e.which === C && i && (e.preventDefault(), a.$button.trigger("click.bs.dropdown.data-api").focus()),
                        p)
                    ) {
                        if (!c.length) return;
                        void 0 === (t = !0 === f ? c.index(c.filter(".active")) : a.selectpicker.current.map.newIndex[a.activeIndex]) && (t = -1),
                            -1 !== t && ((n = a.selectpicker.current.elements[t + m]).classList.remove("active"), n.firstChild && n.firstChild.classList.remove("active")),
                            e.which === H
                                ? (-1 !== t && t--, t + m < 0 && (t += c.length), a.selectpicker.view.canHighlight[t + m] || (-1 === (t = a.selectpicker.view.canHighlight.slice(0, t + m).lastIndexOf(!0) - m) && (t = c.length - 1)))
                                : (e.which === L || h) &&
                                  (++t + m >= a.selectpicker.view.canHighlight.length && (t = 0), a.selectpicker.view.canHighlight[t + m] || (t = t + 1 + a.selectpicker.view.canHighlight.slice(t + m + 1).indexOf(!0))),
                            e.preventDefault();
                        var v = m + t;
                        e.which === H
                            ? 0 === m && t === c.length - 1
                                ? ((a.$menuInner[0].scrollTop = a.$menuInner[0].scrollHeight), (v = a.selectpicker.current.elements.length - 1))
                                : (d = (o = (s = a.selectpicker.current.data[v]).position - s.height) < u)
                            : (e.which === L || h) && (0 === t ? (v = a.$menuInner[0].scrollTop = 0) : (d = u < (o = (s = a.selectpicker.current.data[v]).position - a.sizeInfo.menuInnerHeight))),
                            (n = a.selectpicker.current.elements[v]) && (n.classList.add("active"), n.firstChild && n.firstChild.classList.add("active")),
                            (a.activeIndex = a.selectpicker.current.map.originalIndex[v]),
                            (a.selectpicker.view.currentActive = n),
                            d && (a.$menuInner[0].scrollTop = o),
                            a.options.liveSearch ? a.$searchbox.focus() : r.focus();
                    } else if ((!r.is("input") && !P.test(e.which)) || (e.which === z && a.selectpicker.keydown.keyHistory)) {
                        var g,
                            b,
                            w = [];
                        e.preventDefault(),
                            (a.selectpicker.keydown.keyHistory += E[e.which]),
                            a.selectpicker.keydown.resetKeyHistory.cancel && clearTimeout(a.selectpicker.keydown.resetKeyHistory.cancel),
                            (a.selectpicker.keydown.resetKeyHistory.cancel = a.selectpicker.keydown.resetKeyHistory.start()),
                            (b = a.selectpicker.keydown.keyHistory),
                            /^(.)\1+$/.test(b) && (b = b.charAt(0));
                        for (var x = 0; x < a.selectpicker.current.data.length; x++) {
                            var I = a.selectpicker.current.data[x];
                            y(I, b, "startsWith", !0) && a.selectpicker.view.canHighlight[x] && ((I.index = x), w.push(I.originalIndex));
                        }
                        if (w.length) {
                            var k = 0;
                            c.removeClass("active").find("a").removeClass("active"),
                                1 === b.length && (-1 === (k = w.indexOf(a.activeIndex)) || k === w.length - 1 ? (k = 0) : k++),
                                (g = a.selectpicker.current.map.newIndex[w[k]]),
                                (d = 0 < u - (s = a.selectpicker.current.data[g]).position ? ((o = s.position - s.height), !0) : ((o = s.position - a.sizeInfo.menuInnerHeight), s.position > u + a.sizeInfo.menuInnerHeight)),
                                (n = a.selectpicker.current.elements[g]).classList.add("active"),
                                n.firstChild && n.firstChild.classList.add("active"),
                                (a.activeIndex = w[k]),
                                n.firstChild.focus(),
                                d && (a.$menuInner[0].scrollTop = o),
                                r.focus();
                        }
                    }
                    i &&
                        ((e.which === z && !a.selectpicker.keydown.keyHistory) || e.which === T || (e.which === D && a.options.selectOnTab)) &&
                        (e.which !== z && e.preventDefault(),
                        (a.options.liveSearch && e.which === z) || (a.$menuInner.find(".active a").trigger("click", !0), r.focus(), a.options.liveSearch || (e.preventDefault(), j(document).data("spaceSelect1", !0))));
                },
                mobile: function () {
                    this.$element.addClass("mobile-device");
                },
                refresh: function () {
                    var e = j.extend({}, this.options, this.$element.data());
                    (this.options = e),
                        (this.selectpicker.main.map.newIndex = {}),
                        (this.selectpicker.main.map.originalIndex = {}),
                        this.createLi(),
                        this.checkDisabled(),
                        this.render(),
                        this.setStyle(),
                        this.setWidth(),
                        this.setSize(!0),
                        this.$element.trigger("refreshed.bs.select1");
                },
                hide: function () {
                    this.$newElement.hide();
                },
                show: function () {
                    this.$newElement.show();
                },
                remove: function () {
                    this.$newElement.remove(), this.$element.remove();
                },
                destroy: function () {
                    this.$newElement.before(this.$element).remove(),
                        this.$bsContainer ? this.$bsContainer.remove() : this.$menu.remove(),
                        this.$element.off(".bs.select1").removeData("selectpicker").removeClass("bs-select-hidden selectpicker");
                },
            });
        var h = j.fn.selectpicker;
        (j.fn.selectpicker = l),
            (j.fn.selectpicker.Constructor = a),
            (j.fn.selectpicker.noConflict = function () {
                return (j.fn.selectpicker = h), this;
            }),
            j(document)
                .off("keydown.bs.dropdown.data-api")
                .on("keydown.bs.select1", '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bs-searchbox input', a.prototype.keydown)
                .on("focusin.modal", '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bs-searchbox input', function (e) {
                    e.stopPropagation();
                }),
            j(window).on("load.bs.select.data-api", function () {
                j(".selectpicker").each(function () {
                    var e = j(this);
                    l.call(e, e.data());
                });
            });
    })(e);
}),
    (function (C) {
        C.fn.extend({
            slimScroll: function ($) {
                var S = C.extend(
                    {
                        width: "auto",
                        height: "250px",
                        size: "7px",
                        color: "#000",
                        position: "right",
                        distance: "1px",
                        start: "top",
                        opacity: 0.4,
                        alwaysVisible: !1,
                        disableFadeOut: !1,
                        railVisible: !1,
                        railColor: "#333",
                        railOpacity: 0.2,
                        railDraggable: !0,
                        railClass: "slimScrollRail",
                        barClass: "slimScrollBar",
                        wrapperClass: "slimScrollDiv",
                        allowPageScroll: !1,
                        wheelStep: 20,
                        touchScrollStep: 200,
                        borderRadius: "0",
                        railBorderRadius: "0",
                    },
                    $
                );
                return (
                    this.each(function () {
                        var n,
                            e,
                            s,
                            i,
                            o,
                            r,
                            l,
                            a,
                            c = "<div></div>",
                            d = 30,
                            h = !1,
                            p = C(this);
                        if (p.parent().hasClass(S.wrapperClass)) {
                            var u = p.scrollTop();
                            if (((b = p.closest("." + S.barClass)), (g = p.closest("." + S.railClass)), k(), C.isPlainObject($))) {
                                if ("height" in $ && "auto" == $.height) {
                                    p.parent().css("height", "auto"), p.css("height", "auto");
                                    var f = p.parent().parent().height();
                                    p.parent().css("height", f), p.css("height", f);
                                }
                                if ("scrollTo" in $) u = parseInt(S.scrollTo);
                                else if ("scrollBy" in $) u += parseInt(S.scrollBy);
                                else if ("destroy" in $) return b.remove(), g.remove(), void p.unwrap();
                                I(u, !1, !0);
                            }
                        } else if (!(C.isPlainObject($) && "destroy" in $)) {
                            S.height = "auto" == S.height ? p.parent().height() : S.height;
                            var m = C(c).addClass(S.wrapperClass).css({ position: "relative", overflow: "hidden", width: S.width, height: S.height });
                            p.css({ overflow: "hidden", width: S.width, height: S.height });
                            var v,
                                g = C(c)
                                    .addClass(S.railClass)
                                    .css({
                                        width: S.size,
                                        height: "100%",
                                        position: "absolute",
                                        top: 0,
                                        display: S.alwaysVisible && S.railVisible ? "block" : "none",
                                        "border-radius": S.railBorderRadius,
                                        background: S.railColor,
                                        opacity: S.railOpacity,
                                        zIndex: 90,
                                    }),
                                b = C(c)
                                    .addClass(S.barClass)
                                    .css({
                                        background: S.color,
                                        width: S.size,
                                        position: "absolute",
                                        top: 0,
                                        opacity: S.opacity,
                                        display: S.alwaysVisible ? "block" : "none",
                                        "border-radius": S.borderRadius,
                                        BorderRadius: S.borderRadius,
                                        MozBorderRadius: S.borderRadius,
                                        WebkitBorderRadius: S.borderRadius,
                                        zIndex: 99,
                                    }),
                                w = "right" == S.position ? { right: S.distance } : { left: S.distance };
                            g.css(w),
                                b.css(w),
                                p.wrap(m),
                                p.parent().append(b),
                                p.parent().append(g),
                                S.railDraggable &&
                                    b
                                        .bind("mousedown", function (e) {
                                            var i = C(document);
                                            return (
                                                (s = !0),
                                                (t = parseFloat(b.css("top"))),
                                                (pageY = e.pageY),
                                                i.bind("mousemove.slimscroll", function (e) {
                                                    (currTop = t + e.pageY - pageY), b.css("top", currTop), I(0, b.position().top, !1);
                                                }),
                                                i.bind("mouseup.slimscroll", function (e) {
                                                    (s = !1), E(), i.unbind(".slimscroll");
                                                }),
                                                !1
                                            );
                                        })
                                        .bind("selectstart.slimscroll", function (e) {
                                            return e.stopPropagation(), e.preventDefault(), !1;
                                        }),
                                g.hover(
                                    function () {
                                        y();
                                    },
                                    function () {
                                        E();
                                    }
                                ),
                                b.hover(
                                    function () {
                                        e = !0;
                                    },
                                    function () {
                                        e = !1;
                                    }
                                ),
                                p.hover(
                                    function () {
                                        (n = !0), y(), E();
                                    },
                                    function () {
                                        (n = !1), E();
                                    }
                                ),
                                p.bind("touchstart", function (e, t) {
                                    e.originalEvent.touches.length && (o = e.originalEvent.touches[0].pageY);
                                }),
                                p.bind("touchmove", function (e) {
                                    (h || e.originalEvent.preventDefault(), e.originalEvent.touches.length) && (I((o - e.originalEvent.touches[0].pageY) / S.touchScrollStep, !0), (o = e.originalEvent.touches[0].pageY));
                                }),
                                k(),
                                "bottom" === S.start ? (b.css({ top: p.outerHeight() - b.outerHeight() }), I(0, !0)) : "top" !== S.start && (I(C(S.start).position().top, null, !0), S.alwaysVisible || b.hide()),
                                (v = this),
                                window.addEventListener ? (v.addEventListener("DOMMouseScroll", x, !1), v.addEventListener("mousewheel", x, !1)) : document.attachEvent("onmousewheel", x);
                        }
                        function x(e) {
                            if (n) {
                                var t = 0;
                                (e = e || window.event).wheelDelta && (t = -e.wheelDelta / 120), e.detail && (t = e.detail / 3);
                                var i = e.target || e.srcTarget || e.srcElement;
                                C(i)
                                    .closest("." + S.wrapperClass)
                                    .is(p.parent()) && I(t, !0),
                                    e.preventDefault && !h && e.preventDefault(),
                                    h || (e.returnValue = !1);
                            }
                        }
                        function I(e, t, i) {
                            h = !1;
                            var n = e,
                                s = p.outerHeight() - b.outerHeight();
                            if (
                                (t && ((n = parseInt(b.css("top")) + ((e * parseInt(S.wheelStep)) / 100) * b.outerHeight()), (n = Math.min(Math.max(n, 0), s)), (n = 0 < e ? Math.ceil(n) : Math.floor(n)), b.css({ top: n + "px" })),
                                (n = (l = parseInt(b.css("top")) / (p.outerHeight() - b.outerHeight())) * (p[0].scrollHeight - p.outerHeight())),
                                i)
                            ) {
                                var o = ((n = e) / p[0].scrollHeight) * p.outerHeight();
                                (o = Math.min(Math.max(o, 0), s)), b.css({ top: o + "px" });
                            }
                            p.scrollTop(n), p.trigger("slimscrolling", ~~n), y(), E();
                        }
                        function k() {
                            (r = Math.max((p.outerHeight() / p[0].scrollHeight) * p.outerHeight(), d)), b.css({ height: r + "px" });
                            var e = r == p.outerHeight() ? "none" : "block";
                            b.css({ display: e });
                        }
                        function y() {
                            if ((k(), clearTimeout(i), l == ~~l)) {
                                if (((h = S.allowPageScroll), a != l)) {
                                    var e = 0 == ~~l ? "top" : "bottom";
                                    p.trigger("slimscroll", e);
                                }
                            } else h = !1;
                            (a = l), r >= p.outerHeight() ? (h = !0) : (b.stop(!0, !0).fadeIn("fast"), S.railVisible && g.stop(!0, !0).fadeIn("fast"));
                        }
                        function E() {
                            S.alwaysVisible ||
                                (i = setTimeout(function () {
                                    (S.disableFadeOut && n) || e || s || (b.fadeOut("slow"), g.fadeOut("slow"));
                                }, 1e3));
                        }
                    }),
                    this
                );
            },
        }),
            C.fn.extend({ slimscroll: C.fn.slimScroll });
    })(jQuery),
    (function (e, t) {
        "use strict";
        "function" == typeof define && define.amd
            ? define([], function () {
                  return t.apply(e);
              })
            : "object" == typeof exports
            ? (module.exports = t.call(e))
            : (e.Waves = t.call(e));
    })("object" == typeof global ? global : this, function () {
        "use strict";
        var t = t || {},
            n = document.querySelectorAll.bind(document),
            r = Object.prototype.toString,
            l = "ontouchstart" in window;
        function s(e) {
            var t = typeof e;
            return "function" === t || ("object" === t && !!e);
        }
        function d(e) {
            var t,
                i = r.call(e);
            return "[object String]" === i ? n(e) : s(e) && /^\[object (Array|HTMLCollection|NodeList|Object)\]$/.test(i) && e.hasOwnProperty("length") ? e : s((t = e)) && 0 < t.nodeType ? [e] : [];
        }
        function h(e) {
            var t,
                i,
                n,
                s,
                o = { top: 0, left: 0 },
                r = e && e.ownerDocument;
            return (
                (t = r.documentElement),
                void 0 !== e.getBoundingClientRect && (o = e.getBoundingClientRect()),
                (i = null !== (s = n = r) && s === s.window ? n : 9 === n.nodeType && n.defaultView),
                { top: o.top + i.pageYOffset - t.clientTop, left: o.left + i.pageXOffset - t.clientLeft }
            );
        }
        function p(e) {
            var t = "";
            for (var i in e) e.hasOwnProperty(i) && (t += i + ":" + e[i] + ";");
            return t;
        }
        var u = {
                duration: 750,
                delay: 200,
                show: function (e, t, i) {
                    if (2 === e.button) return !1;
                    t = t || this;
                    var n = document.createElement("div");
                    (n.className = "waves-ripple waves-rippling"), t.appendChild(n);
                    var s = h(t),
                        o = 0,
                        r = 0;
                    (r = 0 <= (r = "touches" in e && e.touches.length ? ((o = e.touches[0].pageY - s.top), e.touches[0].pageX - s.left) : ((o = e.pageY - s.top), e.pageX - s.left)) ? r : 0), (o = 0 <= o ? o : 0);
                    var l = "scale(" + (t.clientWidth / 100) * 3 + ")",
                        a = "translate(0,0)";
                    i && (a = "translate(" + i.x + "px, " + i.y + "px)"),
                        n.setAttribute("data-hold", Date.now()),
                        n.setAttribute("data-x", r),
                        n.setAttribute("data-y", o),
                        n.setAttribute("data-scale", l),
                        n.setAttribute("data-translate", a);
                    var c = { top: o + "px", left: r + "px" };
                    n.classList.add("waves-notransition"),
                        n.setAttribute("style", p(c)),
                        n.classList.remove("waves-notransition"),
                        (c["-webkit-transform"] = l + " " + a),
                        (c["-moz-transform"] = l + " " + a),
                        (c["-ms-transform"] = l + " " + a),
                        (c["-o-transform"] = l + " " + a),
                        (c.transform = l + " " + a),
                        (c.opacity = "1");
                    var d = "mousemove" === e.type ? 2500 : u.duration;
                    (c["-webkit-transition-duration"] = d + "ms"), (c["-moz-transition-duration"] = d + "ms"), (c["-o-transition-duration"] = d + "ms"), (c["transition-duration"] = d + "ms"), n.setAttribute("style", p(c));
                },
                hide: function (e, t) {
                    for (var i = (t = t || this).getElementsByClassName("waves-rippling"), n = 0, s = i.length; n < s; n++) o(e, t, i[n]);
                },
            },
            a = {
                input: function (e) {
                    var t = e.parentNode;
                    if ("i" !== t.tagName.toLowerCase() || !t.classList.contains("waves-effect")) {
                        var i = document.createElement("i");
                        (i.className = e.className + " waves-input-wrapper"), (e.className = "waves-button-input"), t.replaceChild(i, e), i.appendChild(e);
                        var n = window.getComputedStyle(e, null),
                            s = n.color,
                            o = n.backgroundColor;
                        i.setAttribute("style", "color:" + s + ";background:" + o), e.setAttribute("style", "background-color:rgba(0,0,0,0);");
                    }
                },
                img: function (e) {
                    var t = e.parentNode;
                    if ("i" !== t.tagName.toLowerCase() || !t.classList.contains("waves-effect")) {
                        var i = document.createElement("i");
                        t.replaceChild(i, e), i.appendChild(e);
                    }
                },
            };
        function o(e, t, i) {
            if (i) {
                i.classList.remove("waves-rippling");
                var n = i.getAttribute("data-x"),
                    s = i.getAttribute("data-y"),
                    o = i.getAttribute("data-scale"),
                    r = i.getAttribute("data-translate"),
                    l = 350 - (Date.now() - Number(i.getAttribute("data-hold")));
                l < 0 && (l = 0), "mousemove" === e.type && (l = 150);
                var a = "mousemove" === e.type ? 2500 : u.duration;
                setTimeout(function () {
                    var e = {
                        top: s + "px",
                        left: n + "px",
                        opacity: "0",
                        "-webkit-transition-duration": a + "ms",
                        "-moz-transition-duration": a + "ms",
                        "-o-transition-duration": a + "ms",
                        "transition-duration": a + "ms",
                        "-webkit-transform": o + " " + r,
                        "-moz-transform": o + " " + r,
                        "-ms-transform": o + " " + r,
                        "-o-transform": o + " " + r,
                        transform: o + " " + r,
                    };
                    i.setAttribute("style", p(e)),
                        setTimeout(function () {
                            try {
                                t.removeChild(i);
                            } catch (e) {
                                return !1;
                            }
                        }, a);
                }, l);
            }
        }
        var c = {
            touches: 0,
            allowEvent: function (e) {
                var t = !0;
                return /^(mousedown|mousemove)$/.test(e.type) && c.touches && (t = !1), t;
            },
            registerEvent: function (e) {
                var t = e.type;
                "touchstart" === t
                    ? (c.touches += 1)
                    : /^(touchend|touchcancel)$/.test(t) &&
                      setTimeout(function () {
                          c.touches && (c.touches -= 1);
                      }, 500);
            },
        };
        function i(t) {
            var i = (function (e) {
                if (!1 === c.allowEvent(e)) return null;
                for (var t = null, i = e.target || e.srcElement; null !== i.parentElement; ) {
                    if (i.classList.contains("waves-effect") && !(i instanceof SVGElement)) {
                        t = i;
                        break;
                    }
                    i = i.parentElement;
                }
                return t;
            })(t);
            if (null !== i) {
                if (i.disabled || i.getAttribute("disabled") || i.classList.contains("disabled")) return;
                if ((c.registerEvent(t), "touchstart" === t.type && u.delay)) {
                    var n = !1,
                        s = setTimeout(function () {
                            (s = null), u.show(t, i);
                        }, u.delay),
                        o = function (e) {
                            s && (clearTimeout(s), (s = null), u.show(t, i)), n || ((n = !0), u.hide(e, i));
                        };
                    i.addEventListener(
                        "touchmove",
                        function (e) {
                            s && (clearTimeout(s), (s = null)), o(e);
                        },
                        !1
                    ),
                        i.addEventListener("touchend", o, !1),
                        i.addEventListener("touchcancel", o, !1);
                } else u.show(t, i), l && (i.addEventListener("touchend", u.hide, !1), i.addEventListener("touchcancel", u.hide, !1)), i.addEventListener("mouseup", u.hide, !1), i.addEventListener("mouseleave", u.hide, !1);
            }
        }
        return (
            (t.init = function (e) {
                var t = document.body;
                "duration" in (e = e || {}) && (u.duration = e.duration),
                    "delay" in e && (u.delay = e.delay),
                    l && (t.addEventListener("touchstart", i, !1), t.addEventListener("touchcancel", c.registerEvent, !1), t.addEventListener("touchend", c.registerEvent, !1)),
                    t.addEventListener("mousedown", i, !1);
            }),
            (t.attach = function (e, t) {
                var i, n;
                (e = d(e)), "[object Array]" === r.call(t) && (t = t.join(" ")), (t = t ? " " + t : "");
                for (var s = 0, o = e.length; s < o; s++)
                    (n = (i = e[s]).tagName.toLowerCase()), -1 !== ["input", "img"].indexOf(n) && (a[n](i), (i = i.parentElement)), -1 === i.className.indexOf("waves-effect") && (i.className += " waves-effect" + t);
            }),
            (t.ripple = function (e, t) {
                var i = (e = d(e)).length;
                if ((((t = t || {}).wait = t.wait || 0), (t.position = t.position || null), i))
                    for (
                        var n,
                            s,
                            o,
                            r = {},
                            l = 0,
                            a = { type: "mousedown", button: 1 },
                            c = function (e, t) {
                                return function () {
                                    u.hide(e, t);
                                };
                            };
                        l < i;
                        l++
                    )
                        if (
                            ((n = e[l]),
                            (s = t.position || { x: n.clientWidth / 2, y: n.clientHeight / 2 }),
                            (o = h(n)),
                            (r.x = o.left + s.x),
                            (r.y = o.top + s.y),
                            (a.pageX = r.x),
                            (a.pageY = r.y),
                            u.show(a, n),
                            0 <= t.wait && null !== t.wait)
                        ) {
                            setTimeout(c({ type: "mouseup", button: 1 }, n), t.wait);
                        }
            }),
            (t.calm = function (e) {
                for (var t = { type: "mouseup", button: 1 }, i = 0, n = (e = d(e)).length; i < n; i++) u.hide(t, e[i]);
            }),
            (t.displayEffect = function (e) {
                console.error("Waves.displayEffect() has been deprecated and will be removed in future version. Please use Waves.init() to initialize Waves effect"), t.init(e);
            }),
            t
        );
    }),
    (function () {
        "use strict";
        var r = "undefined" != typeof window && void 0 !== window.document ? window.document : {},
            e = "undefined" != typeof module && module.exports,
            l = "undefined" != typeof Element && "ALLOW_KEYBOARD_INPUT" in Element,
            a = (function () {
                for (
                    var e,
                        t = [
                            ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
                            ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
                            ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
                            ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
                            ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"],
                        ],
                        i = 0,
                        n = t.length,
                        s = {};
                    i < n;
                    i++
                )
                    if ((e = t[i]) && e[1] in r) {
                        for (i = 0; i < e.length; i++) s[t[0][i]] = e[i];
                        return s;
                    }
                return !1;
            })(),
            n = { change: a.fullscreenchange, error: a.fullscreenerror },
            t = {
                request: function (o) {
                    return new Promise(
                        function (e, t) {
                            var i,
                                n = a.requestFullscreen,
                                s = function () {
                                    this.off("change", s), e();
                                }.bind(this);
                            this.on("change", s), (o = o || r.documentElement), (i = / Version\/5\.1(?:\.\d+)? Safari\//.test(navigator.userAgent) ? o[n]() : o[n](l ? Element.ALLOW_KEYBOARD_INPUT : {})), Promise.resolve(i).catch(t);
                        }.bind(this)
                    );
                },
                exit: function () {
                    return new Promise(
                        function (e) {
                            if (this.isFullscreen) {
                                var t = function () {
                                    this.off("change", t), e();
                                }.bind(this);
                                r[a.exitFullscreen](), this.on("change", t);
                            } else e();
                        }.bind(this)
                    );
                },
                toggle: function (e) {
                    return this.isFullscreen ? this.exit() : this.request(e);
                },
                onchange: function (e) {
                    this.on("change", e);
                },
                onerror: function (e) {
                    this.on("error", e);
                },
                on: function (e, t) {
                    var i = n[e];
                    i && r.addEventListener(i, t, !1);
                },
                off: function (e, t) {
                    var i = n[e];
                    i && r.removeEventListener(i, t, !1);
                },
                raw: a,
            };
        a
            ? (Object.defineProperties(t, {
                  isFullscreen: {
                      get: function () {
                          return Boolean(r[a.fullscreenElement]);
                      },
                  },
                  element: {
                      enumerable: !0,
                      get: function () {
                          return r[a.fullscreenElement];
                      },
                  },
                  enabled: {
                      enumerable: !0,
                      get: function () {
                          return Boolean(r[a.fullscreenEnabled]);
                      },
                  },
              }),
              e ? ((module.exports = t), (module.exports.default = t)) : (window.screenfull = t))
            : e
            ? (module.exports = !1)
            : (window.screenfull = !1);
    })();
