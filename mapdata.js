var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width: "700", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    
    //State defaults
    state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "http://simplemaps.com",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",
    
    //Location defaults
    location_description: "Location description",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_url: "",
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",
   
    //Zoom settings
    zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "View Website",
    popups: "detect",
    state_image_url: "",
    state_image_position: "",
    location_image_url: "",
    manual_zoom: "yes"
  },
  state_specific: {
    "1": {
      name: "Andaman and Nicobar",
      description: "paddy,cocunut",
      color: "#c914d5"
    },
    "2": {
      name: "Andhra Pradesh",
      description: "oil seeds,maize",
      color: "#14d535"
    },
    "3": {
      name: "Arunachal Pradesh",
      color: "#1714d5",
      description: "rise,maize,millet,wheat"
    },
    "4": {
      name: "Assam",
      color: "#14ced5",
      description: "potato,tea,jute,tobacco"
    },
    "5": {
      name: "Bihar",
      color: "#d51450",
      description: "mango,guava,lychee,banana"
    },
    "6": {
      name: "Chandigarh",
      color: "#b0d514",
      description: "wheat"
    },
    "7": {
      name: "Chhattisgarh",
      color: "#2fb89e",
      description: "paddy,groundnuts,oilseeds"
    },
    "8": {
      name: "Dadra and Nagar Haveli",
      color: "#f8e21b",
      description: "paddy,mango,sapota"
    },
    "9": {
      name: "Daman and Diu",
      color: "#383dba",
      description: "rice,ragi,pulses"
    },
    "10": {
      name: "Delhi",
      color: "#baad38",
      description: "califlower,cabbage,corriandor"
    },
    "11": {
      name: "Goa",
      color: "#e71dc5",
      description: "ragi,maize,johar"
    },
    "12": {
      name: "Gujarat",
      color: "#d61eb7",
      description: "rice,johar,wheat,bajra"
    },
    "13": {
      name: "Haryana",
      color: "#e5d116",
      description: "rabi,kharif"
    },
    "14": {
      name: "Himachal Pradesh",
      color: "#5cf17e",
      description: "wheat,maize,rice,barley"
    },
    "16": {
      name: "Jharkhand",
      color: "#fa0938",
      description: "paddy,maize,pulses,groundnuts"
    },
    "17": {
      name: "Karnataka",
      color: "#fa7309",
      description: "ragi,johar,oilseeds"
    },
    "18": {
      name: "Kerala",
      color: "#fa0938",
      description: "rubber,pepper,ginger"
    },
    "19": {
      name: "Lakshadweep",
      color: "#877fed",
      description: "sweet potatoes,banana"
    },
    "20": {
      name: "Madhya Pradesh",
      color: "#19c72c",
      description: "johar,maize,thur"
    },
    "21": {
      name: "Maharashtra",
      color: "#e4db0f",
      description: "johar,bajra"
    },
    "22": {
      name: "Manipur",
      color: "#1d1c05",
      description: "tobacco,sugarcane,pineapple,peach"
    },
    "23": {
      name: "Meghalaya",
      color: "#fa7309",
      description: "papaya,spices,maize"
    },
    "24": {
      name: "Mizoram",
      color: "#d19c73",
      description: "brinjal,turmeric"
    },
    "25": {
      name: "Nagaland",
      color: "#e70d0d",
      description: "rice,millet,sugarcane"
    },
    "26": {
      name: "Orissa",
      color: "#2f08d6",
      description: "arhar,mung,biri,kulthi"
    },
    "27": {
      name: "Puducherry",
      color: "#d6cf2e",
      description: "bajra,groundnuts"
    },
    "28": {
      name: "Punjab",
      color: "#361f7c",
      description: "barley,sugarcane"
    },
    "29": {
      name: "Rajasthan",
      color: "#2de6ed",
      description: "pulses"
    },
    "30": {
      name: "Sikkim",
      description: "potatoes,tea,barley,wheat",
      color: "#2ded43"
    },
    "31": {
      name: "Tamil Nadu",
      description: "rice,johar,bajra,wheat",
      color: "#e12ded"
    },
    "32": {
      name: "Tripura",
      description: "natural rubber,chilli,jackfruit",
      color: "#64600c"
    },
    "33": {
      name: "Uttar Pradesh",
      color: "#248ee2",
      description: "wheat,rice,pulses,oilseeds"
    },
    "34": {
      name: "Uttaranchal",
      color: "#2de6ed",
      description: "millet,wheat,oilseeds,barley"
    },
    "35": {
      name: "West Bengal",
      color: "#edfe16",
      description: "jute,wheat,maize,pulses"
    },
    "36": {
      name: "Jammu and Kashmir",
      color: "#e8edae",
      description: "oilseeds,apples"
    },
    "37": {
      name: "Telangana",
      color: "#0913fa",
      description: "groundnuts,cotton,green gram"
    }
  },
  locations: {
    "0": {
      lat: 18.987807,
      lng: 72.836447,
      name: "Mumbai"
    }
  },
  labels: {},
  regions: {}
};