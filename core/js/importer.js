var NKDefine = requirejs.config({
    baseUri: "/core/js/",
    paths:{
        "jquery":"js/jquery"
    }
});
console.log(NKDefine(["js/jquery"]));