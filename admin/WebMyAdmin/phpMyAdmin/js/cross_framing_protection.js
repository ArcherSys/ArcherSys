<<<<<<< HEAD
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Conditionally included if framing is not allowed
 */
if (self == top) {
    var style_element = document.getElementById("cfs-style");
    style_element.parentNode.removeChild(style_element);
} else {
    top.location = self.location;
}
=======
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Conditionally included if framing is not allowed
 */
if (self == top) {
    var style_element = document.getElementById("cfs-style");
    style_element.parentNode.removeChild(style_element);
} else {
    top.location = self.location;
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
