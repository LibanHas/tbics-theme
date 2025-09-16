// /assets/js/tbics-nav.js
(function(){
    const nav = document.getElementById('main-nav');
    if(!nav) return;
  
    const setOffset = () => {
      const h = nav.getBoundingClientRect().height;
      document.documentElement.style.setProperty('--nav-offset', `${h}px`);
    };
  
    const ACTIVATE_AT = 10; // px scrolled before morphing
    let ticking = false;
    let scrolled = false;
  
    const onScroll = () => {
      const y = window.pageYOffset || document.documentElement.scrollTop;
      const now = y > ACTIVATE_AT;
  
      if (now !== scrolled){
        scrolled = now;
        nav.classList.toggle('is-scrolled', scrolled);
        // after the CSS transition ends, recalc height once more
        nav.addEventListener('transitionend', setOffset, { once: true });
      }
      // also keep offset roughly in sync during scroll
      setOffset();
      ticking = false;
    };
  
    // init
    setOffset();
    onScroll();
  
    window.addEventListener('resize', setOffset);
    window.addEventListener('load', setOffset);
    window.addEventListener('scroll', () => {
      if (!ticking){
        requestAnimationFrame(onScroll);
        ticking = true;
      }
    }, { passive: true });
  })();
  