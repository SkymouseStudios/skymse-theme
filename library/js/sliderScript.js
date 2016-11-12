/*
 * Skymse Scripts File
 * Author: John Welch
 */

// Section: Motion

function closeNavMotion () {
    document.getElementById("slideSectionMotion").className = "overlayLeftOff";
}

function openNavMotion () {
    document.getElementById("slideSectionMotion").className = "overlayLeftActive";
}

document.getElementById("openButtonMotion").addEventListener("click", openNavMotion);

document.getElementById("closeButtonMotion").addEventListener("click", closeNavMotion, false);


// Section: Audio

function openNavAudio () {
    document.getElementById("slideSectionAudio").className = "overlayRightActive";
}

function closeNavAudio () {
    document.getElementById("slideSectionAudio").className = "overlayRightOff";
}

document.getElementById("openButtonAudio").addEventListener("click", openNavAudio);

document.getElementById("closeButtonAudio").addEventListener("click", closeNavAudio, false);


// Section: Dev

function openNavDev () {
    document.getElementById("slideSectionDev").className = "overlayLeftActive";
}

function closeNavDev () {
    document.getElementById("slideSectionDev").className = "overlayLeftOff";
}

document.getElementById("openButtonDev").addEventListener("click", openNavDev);

document.getElementById("closeButtonDev").addEventListener("click", closeNavDev, false);


// Section: Design

function openNavDesign () {
    document.getElementById("slideSectionDesign").className = "overlayRightActive";
}

function closeNavDesign () {
    document.getElementById("slideSectionDesign").className = "overlayRightOff";
}

document.getElementById("openButtonDesign").addEventListener("click", openNavDesign);

document.getElementById("closeButtonDesign").addEventListener("click", closeNavDesign, false);
