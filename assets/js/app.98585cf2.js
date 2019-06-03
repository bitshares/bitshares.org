(function (t) {
    function e(e) {
        for (var a, o, i = e[0], r = e[1], l = e[2], d = 0, h = []; d < i.length; d++) o = i[d], n[o] && h.push(n[o][0]), n[o] = 0;
        for (a in r) Object.prototype.hasOwnProperty.call(r, a) && (t[a] = r[a]);
        u && u(e);
        while (h.length) h.shift()();
        return c.push.apply(c, l || []), s()
    }

    function s() {
        for (var t, e = 0; e < c.length; e++) {
            for (var s = c[e], a = !0, i = 1; i < s.length; i++) {
                var r = s[i];
                0 !== n[r] && (a = !1)
            }
            a && (c.splice(e--, 1), t = o(o.s = s[0]))
        }
        return t
    }
    var a = {},
        n = {
            app: 0
        },
        c = [];

    function o(e) {
        if (a[e]) return a[e].exports;
        var s = a[e] = {
            i: e,
            l: !1,
            exports: {}
        };
        return t[e].call(s.exports, s, s.exports, o), s.l = !0, s.exports
    }
    o.m = t, o.c = a, o.d = function (t, e, s) {
        o.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: s
        })
    }, o.r = function (t) {
        "undefined" !== typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, o.t = function (t, e) {
        if (1 & e && (t = o(t)), 8 & e) return t;
        if (4 & e && "object" === typeof t && t && t.__esModule) return t;
        var s = Object.create(null);
        if (o.r(s), Object.defineProperty(s, "default", {
            enumerable: !0,
            value: t
        }), 2 & e && "string" != typeof t)
            for (var a in t) o.d(s, a, function (e) {
                return t[e]
            }.bind(null, a));
        return s
    }, o.n = function (t) {
        var e = t && t.__esModule ? function () {
            return t["default"]
        } : function () {
            return t
        };
        return o.d(e, "a", e), e
    }, o.o = function (t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, o.p = "/";
    var i = window["webpackJsonp"] = window["webpackJsonp"] || [],
        r = i.push.bind(i);
    i.push = e, i = i.slice();
    for (var l = 0; l < i.length; l++) e(i[l]);
    var u = r;
    c.push([0, "chunk-vendors"]), s()
})({
    0: function (t, e, s) {
        t.exports = s("56d7")
    },
    "061b": function (t, e, s) {
        "use strict";
        s("96cf");
        var a = s("1da1"),
            n = s("d4ec"),
            c = s("bee2"),
            o = s("99de"),
            i = s("7e84"),
            r = s("262e"),
            l = s("06c1"),
            u = s("7e25"),
            d = s.n(u),
            h = function (t) {
                function e(t) {
                    var s;
                    return Object(n["a"])(this, e), s = Object(o["a"])(this, Object(i["a"])(e).call(this)), s.node = t, s
                }
                return Object(r["a"])(e, t), Object(c["a"])(e, [{
                    key: "connect",
                    value: function () {
                        var t = Object(a["a"])(regeneratorRuntime.mark(function t() {
                            return regeneratorRuntime.wrap(function (t) {
                                while (1) switch (t.prev = t.next) {
                                    case 0:
                                        return this.subscription = l["Apis"].instance(this.node, !0).init_promise.then(function () {
                                            return l["Apis"].instance()
                                        }), t.abrupt("return", this.subscription);
                                    case 2:
                                    case "end":
                                        return t.stop()
                                }
                            }, t, this)
                        }));
                        return function () {
                            return t.apply(this, arguments)
                        }
                    }()
                }]), e
            }(d.a);
        e["a"] = h
    },
    "0720": function (t, e, s) {
        "use strict";
        var a = s("dcf4"),
            n = s.n(a);
        n.a
    },
    "0cca": function (t, e, s) { },
    1: function (t, e) { },
    2: function (t, e) { },
    3: function (t, e) { },
    4: function (t, e) { },
    5: function (t, e) { },
    5624: function (t, e, s) {
        "use strict";
        var a = s("0cca"),
            n = s.n(a);
        n.a
    },
    "56d7": function (t, e, s) {
        "use strict";
        s.r(e);
        s("cadf"), s("551c"), s("097d");
        var a = s("2b0e"),
            n = function () {
                var t = this,
                    e = t.$createElement,
                    a = t._self._c || e;
                return a("div", {
                    attrs: {
                        id: "app"
                    }
                }, [a("img", {
                    attrs: {
                        alt: "BTS logo",
                        src: s("cf05")
                    }
                }), a("Signup", {
                    attrs: {
                        msg: "Welcome to BitShares!"
                    }
                })], 1)
            },
            c = [],
            o = function () {
                var t = this,
                    e = t.$createElement,
                    s = t._self._c || e;
                return s("div", {
                    staticClass: "w-100 h-100 d-flex flex-column main-page"
                }, [s("div", {
                    staticClass: "d-block text-center start",
                    attrs: {
                        id: "logos"
                    }
                }), s("div", {
                    staticClass: "d-flex h-50 justify-content-center"
                }, [s("div", {
                    staticClass: "content"
                }, [t.loader ? s("div", {
                    staticClass: "lds-hourglass"
                }) : t._e(), s("transition", {
                    attrs: {
                        name: "custom-classes-transition",
                        "enter-active-class": "fadeIn",
                        "leave-active-class": "fadeOut"
                    }
                }, [t.start ? s("h3", {
                    staticClass: "text-center",
                    staticStyle: {
                        "animation-duration": "0.4s"
                    }
                }, [t._v("Welcome to BitShares")]) : t._e()]), s("transition", {
                    attrs: {
                        name: "custom-classes-transition",
                        "enter-active-class": "fadeIn",
                        "leave-active-class": "fadeOut"
                    }
                }, [t.second ? s("div", {
                    staticStyle: {
                        "animation-duration": "0.4s"
                    }
                }, [t.secondTxt ? s("p", {
                    staticClass: "text-center px-2 mx-auto mb-3 introTxt"
                }, [s("strong", [t._v("Welcome to BitShares!")]), s("br"), t._v("\n                    ")]) : t._e(), s("h3", {
                    staticClass: "mb-4 text-center"
                }, [t._v("Let's create Your free account!")])]) : t._e()]), s("transition", {
                    attrs: {
                        name: "custom-classes-transition",
                        "enter-active-class": "slideInUp"
                    }
                }, [t.second ? s("div", [s("div", {
                    staticClass: "row"
                }, [s("div", {
                    staticClass: "col-2"
                }), s("div", {
                    staticClass: "col-8"
                }, [s("b-form-input", {
                    staticClass: "text-center w-100",
                    staticStyle: {
                        "animation-duration": "0.4s"
                    },
                    attrs: {
                        id: "account",
                        disabled: t.namedisabled,
                        type: "text",
                        placeholder: "Choose your account name"
                    },
                    on: {
                        input: function (e) {
                            t.checkName(t.accountname)
                        }
                    },
                    model: {
                        value: t.accountname,
                        callback: function (e) {
                            t.accountname = e
                        },
                        expression: "accountname"
                    }
                })], 1), s("div", {
                    staticClass: "col-2 px-0 pt-2"
                }, [t.success ? s("font-awesome-icon", {
                    staticClass: "green",
                    attrs: {
                        icon: "check"
                    }
                }) : t._e(), t.error ? s("font-awesome-icon", {
                    staticClass: "red",
                    attrs: {
                        icon: "times"
                    }
                }) : t._e()], 1)]), s("div", {
                    staticClass: "row"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-10 text-center"
                }, [s("div", {
                    staticClass: "mb-3"
                }, [s("span", {
                    staticClass: "d-block error red"
                }, [t._v(t._s(t.errormsg))])])]), s("div", {
                    staticClass: "col-1"
                })]), s("div", {
                    staticClass: "row"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-10 text-center"
                }, [t.shownext ? s("b-button", {
                    staticClass: "show-next",
                    staticStyle: {
                        "animation.delay": "0.4s",
                        "animation-duration": "0.4s"
                    },
                    attrs: {
                        variant: "bitshares"
                    },
                    on: {
                        click: function (e) {
                            t.gotoKeys()
                        }
                    }
                }, [t._v("Next")]) : t._e()], 1), s("div", {
                    staticClass: "col-1"
                })])]) : t._e()]), s("transition", {
                    attrs: {
                        name: "custom-classes-transition",
                        "enter-active-class": "fadeIn",
                        "leave-active-class": "fadeOut"
                    }
                }, [t.keys ? s("div", [s("div", {
                    staticClass: "row checkbox mb-2"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-8 p-0 text-center"
                }, [s("div", {
                    staticClass: "gen-pass"
                }, [t._v("GENERATED PASSWORD")]), s("b-form-input", {
                    staticClass: "text-left mt-2 generated-password",
                    attrs: {
                        id: "password",
                        type: "text",
                        cols: "16",
                        readonly: ""
                    },
                    on: {
                        click: function (e) {
                            t.copyPass()
                        }
                    },
                    model: {
                        value: t.password,
                        callback: function (e) {
                            t.password = e
                        },
                        expression: "password"
                    }
                })], 1), s("div", {
                    staticClass: "col-2"
                }, [s("br"), s("b-button", {
                    staticClass: "mt-2",
                    attrs: {
                        variant: "bitshares button-bts"
                    },
                    on: {
                        click: function (e) {
                            t.copyPass()
                        }
                    }
                }, [t._v("COPY")])], 1), s("div", {
                    staticClass: "col-1"
                })]), s("div", {
                    staticClass: "row checkbox mb-2"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-10 p-0"
                }, [s("b-form-input", {
                    staticClass: "text-center w-100",
                    attrs: {
                        id: "confirmpassword",
                        placeholder: "Please confirm your password",
                        type: "text"
                    },
                    model: {
                        value: t.confirmpassword,
                        callback: function (e) {
                            t.confirmpassword = e
                        },
                        expression: "confirmpassword"
                    }
                })], 1), s("div", {
                    staticClass: "col-1"
                })]), s("div", {
                    staticClass: "row checkbox mb-2"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-1"
                }, [s("b-checkbox", {
                    model: {
                        value: t.check1,
                        callback: function (e) {
                            t.check1 = e
                        },
                        expression: "check1"
                    }
                })], 1), s("div", {
                    staticClass: "col-9 terms"
                }, [t._v("\n                            I agree to Terms of Use\n                        ")]), s("div", {
                    staticClass: "col-1"
                })]), s("div", {
                    staticClass: "row checkbox mb-2"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-1"
                }, [s("b-checkbox", {
                    model: {
                        value: t.check2,
                        callback: function (e) {
                            t.check2 = e
                        },
                        expression: "check2"
                    }
                })], 1), s("div", {
                    staticClass: "col-9 terms nav-linb"
                }, [t._v("\n                            I understand that password cannot be retrieved I've stored it in a safe place.\n                        ")]), s("div", {
                    staticClass: "col-1"
                })])]) : t._e()]), s("transition", {
                    attrs: {
                        name: "custom-classes-transition",
                        "enter-active-class": "fadeIn",
                        "leave-active-class": "fadeOut"
                    }
                }, [t.allChecks ? s("div", [s("div", {
                    staticClass: "row mt-3"
                }, [s("div", {
                    staticClass: "col-1"
                }), s("div", {
                    staticClass: "col-10 text-center"
                }, [t.unclicked ? s("b-button", {
                    attrs: {
                        variant: "bitshares"
                    },
                    on: {
                        click: function (e) {
                            t.createAccount()
                        }
                    }
                }, [t._v("Create Account")]) : t._e()], 1), s("div", {
                    staticClass: "col-1"
                })])]) : t._e()]), s("transition", {
                    attrs: {
                        name: "custom-classes-transition",
                        "enter-active-class": "fadeIn",
                        "leave-active-class": "fadeOut"
                    }
                }, [t.final ? s("div", {
                    staticStyle: {
                        "animation-duration": "0.8s",
                        "animation.delay": "0.9s"
                    }
                }, [s("p", {
                    staticClass: "text-center px-2 mx-auto mt-4 mb-4 nav-linb"
                }, [s("strong", [t._v("Congratulations!")]), s("br"), s("br"), t._v("\n                        Account "), s("strong", [t._v(t._s(this.accountname))]), t._v(" was successfuly processed and created by BitShares Blockchain."), s("br"), t._v("\n                        For login and use, please download latest release of our native dapp from  "), s("a", {
                    attrs: {
                        href: "https://github.com/bitshares/bitshares-ui/releases"
                    }
                }, [t._v("here")]), t._v(" or use our web wallet interface at "), s("a", {
                    attrs: {
                        href: "https://wallet.bitshares.org"
                    }
                }, [t._v("https://wallet.bitshares.org")])])]) : t._e()])], 1)])])
            },
            i = [],
            r = s("e151"),
            l = r["a"],
            u = (s("0720"), s("2877")),
            d = Object(u["a"])(l, o, i, !1, null, null, null);
        d.options.__file = "Signup.vue";
        var h = d.exports,
            f = {
                name: "app",
                components: {
                    Signup: h
                }
            },
            m = f,
            p = (s("5624"), Object(u["a"])(m, n, c, !1, null, "68037fbe", null));
        p.options.__file = "App.vue";
        var v = p.exports,
            b = s("9f7b"),
            w = s("ecee"),
            g = s("c074"),
            y = s("ad3d");
        w["c"].add(g["a"]), w["c"].add(g["b"]), a["a"].component("font-awesome-icon", y["a"]), a["a"].use(b["a"]), a["a"].config.productionTip = !1, new a["a"]({
            render: function (t) {
                return t(v)
            }
        }).$mount("#app")
    },
    6: function (t, e) { },
    7: function (t, e) { },
    7493: function (t, e, s) { },
    8: function (t, e) { },
    cf05: function (t, e, s) {
        t.exports = s.p + "assets/img/logo.2fda6613.png"
    },
    dcf4: function (t, e, s) { },
    e151: function (t, e, s) {
        "use strict";
        (function (t) {
            s("4917"), s("6762"), s("2fdb"), s("96cf");
            var a = s("1da1"),
                n = (s("cadf"), s("551c"), s("097d"), s("061b")),
                c = s("13d4"),
                o = (s("f9e3"), s("2dd8"), s("9ddc"), s("7493"), s("3337")),
                i = s("a50f"),
                r = s.n(i),
                l = s("52b3"),
                u = s.n(l),
                d = new o["ec"]("curve25519");
            e["a"] = {
                name: "Home",
                components: {},
                data: function () {
                    return {
                        start: !1,
                        second: !1,
                        secondTxt: !0,
                        api: null,
                        accountname: "",
                        showcheck: !1,
                        shownext: !1,
                        errormsg: " ",
                        error: !1,
                        success: !1,
                        namedisabled: !1,
                        keys: !1,
                        check1: !1,
                        check2: !1,
                        final: !1,
                        password: "",
                        confirmpassword: "",
                        unclicked: !0,
                        loader: !1
                    }
                },
                computed: {
                    allChecks: function () {
                        return this.check1 && this.check2 && this.password == this.confirmpassword && !this.final
                    }
                },
                mounted: function () {
                    var t = Object(a["a"])(regeneratorRuntime.mark(function t() {
                        var e = this;
                        return regeneratorRuntime.wrap(function (t) {
                            while (1) switch (t.prev = t.next) {
                                case 0:
                                    return this.start = !0, setTimeout(function () {
                                        e.step2()
                                    }, 3e3), this.bitshares = new n["a"]("wss://eu.nodes.bitshares.ws"), t.next = 5, this.bitshares.connect();
                                case 5:
                                    this.api = t.sent, console.log(this.api);
                                case 7:
                                case "end":
                                    return t.stop()
                            }
                        }, t, this)
                    }));
                    return function () {
                        return t.apply(this, arguments)
                    }
                }(),
                methods: {
                    step2: function () {
                        var t = this;
                        this.start = !1, setTimeout(function () {
                            t.second = !0
                        }, 810)
                    },
                    toggleButton: function () {
                        "" == this.accountname.trim() ? (this.showcheck = !1, this.shownext = !1, this.success = !1, this.error = !1, this.errormsg = " ") : (this.success = !1, this.error = !1, this.showcheck = !0, this.shownext = !1, this.errormsg = " ")
                    },
                    generatePass: function () {
                        var t = d.genKeyPair();
                        return t.getPrivate("hex")
                    },
                    checkName: function () {
                        var t = Object(a["a"])(regeneratorRuntime.mark(function t(e) {
                            var s = this;
                            return regeneratorRuntime.wrap(function (t) {
                                while (1) switch (t.prev = t.next) {
                                    case 0:
                                        e = e.toLowerCase(), this.accountname = this.accountname.toLowerCase();
                                        try {
                                            this.api.db_api().exec("get_accounts", [
                                                [e]
                                            ]).then(function (t) {
                                                s.error = !0, s.success = !1, s.errormsg = "This account name is taken already."
                                            }, function (t) {
                                                !s.accountname.includes(".") && s.accountname.length > 6 || /\d/.test(s.accountname) ? s.accountname[0].match(/[a-z]/i) && s.accountname[s.accountname.length - 1].match(/[a-z0-9]/i) ? (s.error = !1, s.success = !0, s.showcheck = !1, s.shownext = !0, s.errormsg = "") : (s.shownext = !1, s.error = !0, s.success = !1, s.errormsg = "The account name should start with a letter and should not end with '-'") : (s.shownext = !1, s.error = !0, s.success = !1, s.errormsg = "That name is Premium Account and can't be registered for free")
                                            })
                                        } catch (a) {
                                            console.log(a)
                                        }
                                    case 3:
                                    case "end":
                                        return t.stop()
                                }
                            }, t, this)
                        }));
                        return function (e) {
                            return t.apply(this, arguments)
                        }
                    }(),
                    gotoKeys: function () {
                        document.getElementById("logos").classList.add("end");
                        var e = this.generatePass(),
                            s = t.from(e, "hex");
                        this.password = "B20" + r.a.encode(128, s, !1), this.shownext = !1, this.secondTxt = !1, this.namedisabled = !0, this.keys = !0
                    },
                    copyPass: function () {
                        var t = document.getElementById("password");
                        t.select(), document.execCommand("copy")
                    },
                    createAccount: function () {
                        var t = this;
                        if (this.allChecks) {
                            function download(data, filename, type) {
                                var file = new Blob([data], { type: type });
                                if (window.navigator.msSaveOrOpenBlob) // IE10+
                                    window.navigator.msSaveOrOpenBlob(file, filename);
                                else { // Others
                                    var a = document.createElement("a"),
                                        url = URL.createObjectURL(file);
                                    a.href = url;
                                    a.download = filename;
                                    document.body.appendChild(a);
                                    a.click();
                                    setTimeout(function () {
                                        document.body.removeChild(a);
                                        window.URL.revokeObjectURL(url);
                                    }, 0);
                                }
                            }
                            var pass = this.password;
                            this.loader = !0, this.unclicked = !1;
                            var e = this.accountname.trim() + "active" + this.password,
                                s = this.accountname.trim() + "owner" + this.password,
                                a = this.accountname.trim() + "memo" + this.password,
                                n = c["PrivateKey"].fromSeed(e),
                                o = c["PrivateKey"].fromSeed(s),
                                i = c["PrivateKey"].fromSeed(a),
                                r = n.toPublicKey().toPublicKeyString("BTS"),
                                l = o.toPublicKey().toPublicKeyString("BTS"),
                                d = i.toPublicKey().toPublicKeyString("BTS");
                            u()({
                                method: "POST",
                                uri: "https://faucet.bitshares.eu/api/v1/accounts",
                                body: {
                                    account: {
                                        name: this.accountname,
                                        owner_key: l,
                                        active_key: r,
                                        memo_key: d
                                    }
                                },
                                json: !0
                            }).then(function (e) {
                                if (!e.error) {
                                    download(pass, 'bitshares-account-password.txt', 'text/plain');
                                }
                                e.error ? (alert(e.error.base), location.reload(!0)) : (t.loader = !1, t.final = !0, t.second = !1, t.keys = !1)
                            }).catch(function (t) {
                                alert(t)
                            })
                        }
                    }
                }
            }
        }).call(this, s("b639").Buffer)
    }
});
//# sourceMappingURL=app.98585cf2.js.map