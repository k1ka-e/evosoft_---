//  Swiper

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 44,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // when window width is >= 1400px
  breakpoints: {
    1400: {
      slidesPerView: 3,
    },
    1100: {
      slidesPerView: 2,
      spaceBetween: 25,
    },
    800: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    600: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    400: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    200: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
  },
});

new Swiper(".mySwiper2", {
  slidesPerView: 2,
  grid: {
    rows: 2,
  },
  // spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    800: {
      slidesPerView: 2,
      grid: {
        rows: 2,
      },
    },
    600: {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
    },
    500: {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
    },
    400: {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
    },
    300: {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
    },
    200: {
      slidesPerView: 1,
      grid: {
        rows: 2,
      },
    }
    
  }
});

 new Swiper(".mySwiper3", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/* select======== */
// const getSelectTemplate = (classes, placeholder, content) => `
// <div class="${classes}">
//   <span class="custom-select-trigger">${placeholder}</span>
//   <div class="custom-options">
//       ${content}
//   </div>
// </div>
// `;

// const getOptionTemplate = (value, text) =>
//   `<span class="custom-option" data-value="${value}">${text}</span> `;

// document.querySelectorAll(".select-wrap").forEach((wrap) => {
//   const select = wrap.querySelector(".custom-select");
//   const classes = select.getAttribute("class");
//   const additional = wrap.dataset.additional || "";

//   const options = select.querySelectorAll("option");
//   let content = Array.from(options)
//     .map((option) =>
//       getOptionTemplate(option.getAttribute("value"), option.innerText)
//     )
//     .join(" ");
//   let template = getSelectTemplate(
//     classes,
//     select.getAttribute("placeholder"),
//     content
//   );

//   let select_wrapper = document.createElement("div");
//   select.style.display = "none";
//   select_wrapper.innerHTML = `<div class="custom-select-wrapper ${additional}">${template}</div>`;
//   wrap.appendChild(select_wrapper);
// });

// const triggers = document.querySelectorAll(".custom-select-trigger");
// triggers.forEach((t) =>
//   t.addEventListener("click", (e) => {
//     e.target.closest(".custom-select").classList.toggle("opened");
//   })
// );

// document.querySelectorAll(".custom-option").forEach((option) => {
//   option.addEventListener("click", function () {
//     option.closest(".select-wrap").querySelector("select").value =
//       option.getAttribute("data-value");
//     option.closest(".custom-select").classList.remove("opened");
//     option
//       .closest(".custom-select")
//       .querySelector(".custom-select-trigger").innerText = option.innerText;
//   });
// });

/********************** Mobile Menu ***********************/
("use strict");

(function () {
  var body = document.body;
  var burgerMenu = document.getElementsByClassName("b-menu")[0];
  var burgerContain = document.getElementsByClassName("b-container")[0];
  var burgerNav = document.getElementsByClassName("b-nav")[0];

  burgerMenu.addEventListener(
    "click",
    function toggleClasses() {
      [body, burgerContain, burgerNav].forEach(function (el) {
        el.classList.toggle("open");
      });
    },
    false
  );
})();

/********************** Mobile Menu ***********************/

// Accordion

function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}




// Scroll


SmoothScroll({
    // Время скролла 400 = 0.4 секунды
    animationTime    : 800,
    // Размер шага в пикселях 
    stepSize         : 65,

    // Дополнительные настройки:
    
    // Ускорение 
    accelerationDelta : 40,  
    // Максимальное ускорение
    accelerationMax   : 2,   

    // Поддержка клавиатуры
    keyboardSupport   : true,  
    // Шаг скролла стрелками на клавиатуре в пикселях
    arrowScroll       : 50,

    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm   : true,
    pulseScale       : 4,
    pulseNormalize   : 1,

    // Поддержка тачпада
    touchpadSupport   : true,
});


