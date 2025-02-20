import '../css/style.scss';

const loadModule = (moduleName) => {
  return import(`./${moduleName}`)
    .then(module => {
      console.log(`${moduleName} Loaded successfully.`);
      return module;
    })
    .catch(err => {
      console.error(`Module loading error ${moduleName}:`, err);
    });
};


document.addEventListener("DOMContentLoaded", async () => {
  try {
    await Promise.all([
      loadModule('_burger'),
      loadModule('_main'),
      loadModule('_select'),
      loadModule('_timer'),
      loadModule('_slider'),
      loadModule('_filter-modal'),
      loadModule('_contact_form'),
    ]);

    const mapModule = await loadModule('_map');
    if (typeof mapModule.initMap === 'function') {
      mapModule.initMap();
    }

    const openingContainerModule = await loadModule('_opening_container');
    if (typeof openingContainerModule.init === 'function') {
      openingContainerModule.init();
    }

    const gsapModule = await loadModule('_gsap');
    if (typeof gsapModule.init === 'function') {
      gsapModule.init();
    }

    const mapElement = document.getElementById("map");
    if (mapElement && mapElement.leafletMap) {
      mapElement.leafletMap.setView([50, 10], 5.2);
    }
  } catch (error) {
    console.error('Error during module initialization:', error);
  }
});
