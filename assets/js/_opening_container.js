const cupsContainer = document.getElementById("cups-container");
const viewCupsButton = document.getElementById("view-cup");
const partnersContainer = document.getElementById("partners-container");
const viewPartnerButton = document.getElementById("view-partner");
const trackContainer = document.getElementById("track-container");
const viewTrackButton = document.getElementById("view-track");
const calendarContainer = document.getElementById("calendar");
const viewCalendarButton = document.getElementById("view-calendar");


let initialHeightCalendar= '364px';

if (window.innerWidth < 486) {
  initialHeightCalendar = '472px';
}


function toggleDisplay(container, button, initialHeight = "", textOpen = "", textClose = "Hide") {
  let isExpanded = false;
  button.addEventListener("click", () => {
    if (!isExpanded) {
      const fullHeight = container.scrollHeight;
      container.style.maxHeight = `${fullHeight}px`;
      button.textContent = textClose;
    } else {
      container.style.maxHeight = initialHeight;
      button.textContent = textOpen;
    }
    isExpanded = !isExpanded;
  });
}

toggleDisplay(cupsContainer, viewCupsButton, "492px", textOpen = "More awards", textClose = "Hide");
toggleDisplay(partnersContainer, viewPartnerButton, "364px", textOpen = "More discounts", textClose = "Hide");
toggleDisplay(trackContainer, viewTrackButton, "364px", textOpen = "More tracks", textClose = "Hide");
toggleDisplay(calendarContainer, viewCalendarButton, initialHeightCalendar, textOpen = "More tracks", textClose = "Hide");


