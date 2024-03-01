



// Sample data for brands, models, and versions
const brandModelVersionData = {
    "computer": {
      "Dell": {
        "Inspiron": ["Vostro", "Precision"],
        "XPS": ["XPS 13", "XPS 15"],
        "Latitude": ["Latitude 7400", "Latitude 5500"]
      },
      "HP": {
        "Pavilion": ["Pavilion Desktop", "Pavilion Laptop"],
        "Envy": ["Envy x360", "Envy Desktop"],
        "EliteBook": ["EliteBook 840 G7", "EliteBook 850 G7"]
      },
      "Apple": {
        "MacBook Air": ["MacBook Air (Late 2010):", "MacBook Air (Mid 2011):", "MacBook Air (Mid 2012):", "MacBook Air (Mid 2013):", "MacBook Air (Early 2014):", "MacBook Air (Early 2015):", "MacBook Air (2017):", "MacBook Air (2018):", "MacBook Air (2020):"],
          "MacBook Pro": [
            "MacBook Pro (Original):",
            "MacBook Pro (Core 2 Duo):",
            "MacBook Pro (Late 2008):",
            "MacBook Pro (Mid 2009):",
            "MacBook Pro (Mid 2010):",
            "MacBook Pro (Early 2011):",
            "MacBook Pro (Mid 2012):",
            "MacBook Pro (Late 2013):",
            "MacBook Pro (Mid 2014)",
            "MacBook Pro (Early 2015):",
            "MacBook Pro (Late 2016):",
            "MacBook Pro (Mid 2017):",
            "MacBook Pro (2018):",
            "MacBook Pro (2019):",
            "MacBook Pro (2020):",
            "MacBook Pro (Late 2021):"
          ]
        ,
        "iMac": ["iMac 21.5-inch", "iMac 27-inch"]
      },
      "Lenovo": {
        "Inspiron": ["Vostro", "Precision"],
        "XPS": ["XPS 13", "XPS 15"],
        "Latitude": ["Latitude 7400", "Latitude 5500"]
      },
      "Asus": {
        "Pavilion": ["Pavilion Desktop", "Pavilion Laptop"],
        "Envy": ["Envy x360", "Envy Desktop"],
        "EliteBook": ["EliteBook 840 G7", "EliteBook 850 G7"]
      },
      "Toshiba": {
        "MacBook Air": ["MacBook Air 13-inch", "MacBook Air M1"],
        "MacBook Pro": ["MacBook Pro 13-inch", "MacBook Pro 16-inch"],
        "iMac": ["iMac 21.5-inch", "iMac 27-inch"]
      }
    },
    // Similar data for phones and tablets
  };
  
  // Function to update the brand options based on the selected device type
  function updateBrandOptions() {
    const deviceType = document.getElementById('deviceType').value;
    const brandSelect = document.getElementById('brand');
    const modelSelect = document.getElementById('model');
    const versionSelect = document.getElementById('version');
    brandSelect.innerHTML = '<option value="">Select Brand</option>';
    modelSelect.innerHTML = '<option value="">Select Model</option>';
    versionSelect.innerHTML = '<option value="">Select Version</option>';
    if (deviceType !== "") {
      const brands = Object.keys(brandModelVersionData[deviceType]);
      brands.forEach(brand => {
        const option = document.createElement('option');
        option.text = brand;
        option.value = brand;
        brandSelect.appendChild(option);
      });
      brandSelect.disabled = false;
    } else {
      brandSelect.disabled = true;
      modelSelect.disabled = true;
      versionSelect.disabled = true;
    }
  }
  
  // Function to update the model options based on the selected brand
  function updateModelOptions() {
    const deviceType = document.getElementById('deviceType').value;
    const brand = document.getElementById('brand').value;
    const modelSelect = document.getElementById('model');
    const versionSelect = document.getElementById('version');
    modelSelect.innerHTML = '<option value="">Select Model</option>';
    versionSelect.innerHTML = '<option value="">Select Version</option>';
    if (brand !== "") {
      const models = Object.keys(brandModelVersionData[deviceType][brand]);
      models.forEach(model => {
        const option = document.createElement('option');
        option.text = model;
        option.value = model;
        modelSelect.appendChild(option);
      });
      modelSelect.disabled = false;
    } else {
      modelSelect.disabled = true;
      versionSelect.disabled = true;
    }
  }
  
  // Function to update the version options based on the selected model
  function updateVersionOptions() {
    const deviceType = document.getElementById('deviceType').value;
    const brand = document.getElementById('brand').value;
    const model = document.getElementById('model').value;
    const versionSelect = document.getElementById('version');
    versionSelect.innerHTML = '<option value="">Select Version</option>';
    if (model !== "") {
      const versions = brandModelVersionData[deviceType][brand][model];
      versions.forEach(version => {
        const option = document.createElement('option');
        option.text = version;
        option.value = version;
        versionSelect.appendChild(option);
      });
      versionSelect.disabled = false;
    } else {
      versionSelect.disabled = true;
    }
  }
  document.getElementById("notAvailableCheckbox").addEventListener("change", function() {
    if (this.checked) {
      document.getElementById("notAvailableFields").style.display = "block";
      document.getElementById("brand").disabled = true;
      document.getElementById("model").disabled = true;
      document.getElementById("version").disabled = true;
    } else {
      document.getElementById("notAvailableFields").style.display = "none";
      document.getElementById("brand").disabled = false;
      document.getElementById("model").disabled = false;
      document.getElementById("version").disabled = false;
    }
  });
  
  