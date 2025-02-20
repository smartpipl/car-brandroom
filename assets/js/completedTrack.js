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
    ]);

  } catch (error) {
    console.error('Error during module initialization:', error);
  }
});
