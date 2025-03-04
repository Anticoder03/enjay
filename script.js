var tl = gsap.timeline();
tl.from(".item",{
    y:-100,
    dutarion:1,
    opacity:0,
    stagger:0.25,   
  
})
tl.from(".main .right",{
    y:100,
    dutarion:1,
    opacity:0,  
})
tl.from(".main .left",{
    x:-100,
    dutarion:1,
    opacity:0,  
})
gsap.from(".skill_pera",{
    x:-100,
    dutarion:1,
    opacity:0,
    scrollTrigger:{
        trigger:".skill_pera",
        start:"top 70%",
        end:"top 30%",
        // markers:true,
        scrub:true
    }
})
gsap.from(".icons_skill span",{
    x:-50,
    dutarion:1,
    stagger:0.75,
    opacity:0,
    scrollTrigger:{
        trigger:".icons_skill span",
        start:"top 70%",
        end:"top 30%",
        // markers:true,
        scrub:true

    }
})
gsap.from(".cert",{
    x:-100,
    dutarion:1,
    stagger:0.75,
    opacity:0,
    scrollTrigger:{
        trigger:".cert",
        start:"top 70%",
        end:"top 30%",
        

    }
})
gsap.from(".contact",{
    x:-100,
    dutarion:1,
    stagger:0.75,
    opacity:0,
    scrollTrigger:{
        trigger:".contact",
        start:"top 70%",
        end:"top 30%",
        

    }
})
