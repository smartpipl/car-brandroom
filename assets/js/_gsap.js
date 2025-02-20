import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import SplitType from "split-type";
import {scale} from "leaflet/src/control/Control.Scale";

gsap.registerPlugin(ScrollTrigger);

const split = new SplitType(".cool-split h2", {
  types: "words, chars",
});

const tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".about",
    start: "top 80%",
    end: "+=100%",
    scrub: 0.5,
  },
});

tl.set(split.chars, {
  color: "transparent",
  stagger: 0.1,
});

tl.to(split.chars, {
  duration: 0.3,
  color: "#006A44",
  stagger: 0.1,
}, 0);

tl.to(split.chars, {
  duration: 0.3,
  "-webkit-text-stroke": "2px #006A44",
  stagger: 0.1,
  force3D: true,

}, 0.3);




const mm = gsap.matchMedia();

mm.add("(min-width: 1025px)", () => {
  gsap.to(".profile__item--title", {
    scrollTrigger: {
      trigger: ".profile__wrapper",
      start: "top 120px",
      end: "bottom 340px",
      pin: ".profile__item--title",
      pinSpacing: false,
      scrub: 1,
      // markers: true,
    },
  });
});

mm.add("(max-width: 1025px)", () => {
  gsap.fromTo(
    ".profile__item--title",
    { opacity: 0, scale: 0.8 },
    {
      opacity: 1,
      scale: 1,
      duration: 1.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "header",
        start: "top 100%",
        toggleActions: "play none none reset",
      },
    }
  );
});

// gsap.to(".profile__item--title", {
//   scrollTrigger: {
//     trigger: ".profile__wrapper",
//     start: "top 120px",
//     end: "bottom 340px",
//     pin: ".profile__item--title",
//     pinSpacing: false,
//     scrub: 1,
//     // markers: true,
//   },
// });


gsap.utils.toArray(".container-header").forEach((header) => {
  gsap.fromTo(header,
    { opacity: 0, scale: 0.8 },
    {
      opacity: 1, scale: 1,
      duration: 1.2,
      ease: "power2.out",
      scrollTrigger: {
        trigger: header,
        start: "top 100%",
        toggleActions: "play none none reset",
      }
    }
  );
});

gsap.from(".cups__cup-item", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".cups__cup-item",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});


gsap.from(".citation__content", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".citation__content",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".profile__item--description", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".profile__item--description",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".career__slider", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".career__slider",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".map__container", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".map__container",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".contact__wrapper", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".contact__wrapper",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".partners__item", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".partners__item",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".track__item", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".track__item",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".offer__wrapper", {
  opacity: 0,
  y: 50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".offer__wrapper",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

gsap.from(".career__header", {
  opacity: 0,
  x: -50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".career__header",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});
gsap.from(".timer__header", {
  opacity: 0,
  x: -50,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".timer__header",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});
gsap.from(".timer__image", {
  opacity: 0,
  x: 10,
  duration: 1.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".timer__image",
    start: "top 100%",
    toggleActions: "play none none reset",
  },
  stagger: 0.2,
});

// gsap.from(".calendar__card", {
//   opacity: 0,
//   y: 50,
//   duration: 1,
//   ease: "power2.out",
//   scrollTrigger: {
//     trigger: ".calendar__card",
//     start: "top 100%",
//     toggleActions: "play none none reset",
//   },
// });





