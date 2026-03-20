// Select Calc.php

(function () {
  "use strict";
  var select = document.querySelector("select"),
    selectedIndex = sessionStorage.getItem("selectedIndex"),
    sanitizedUrl = location.protocol + "//" + location.host + location.pathname,
    getOptionvalue = Array.from(document.querySelectorAll("option")).findIndex(
      function (item) {
        return item.value === sanitizedUrl;
      }
    );

  if (parseInt(getOptionvalue) >= 0 && parseInt(getOptionvalue) < 5) {
    selectedIndex = getOptionvalue;
  } else if (selectedIndex == null) {
    selectedIndex = 0;
  }

  sessionStorage.setItem("selectedIndex", selectedIndex);
  selectedIndex = sessionStorage.getItem("selectedIndex");
  select.selectedIndex = selectedIndex;

  document.querySelectorAll("select").forEach(function (el) {
    el.addEventListener("change", function (e) {
      sessionStorage.setItem("selectedIndex", select.selectedIndex);
      selectedIndex = sessionStorage.getItem("selectedIndex");
      var option =
        document.querySelectorAll("option")[e.target.selectedIndex].value;
      if (document.location.href != option) {
        document.location.href = option;
      } else if (selectedIndex > 4) {
        document.querySelector(".calc iframe").style.display = "block";

        getIframeSrc(selectedIndex);
      }
    });
  });

  if (selectedIndex > 4) {
    document.querySelector(".calc iframe").style.display = "block";
    getIframeSrc(selectedIndex);
  } else if (selectedIndex > 0 && selectedIndex < 5) {
    document.querySelector(".calc #app").style.display = "block";
  }
  
  function getIframeSrc(selectedIndex) {
    var getIframe = document.getElementById("stroi-calc"),
      BASE_URL = "https://stroy-calc.ru";
    switch (parseInt(selectedIndex)) {
      case 5:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-lentochnogo-fundamenta&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 6:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-fundamenta-plita&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 7:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-stolbchatogo-fundamenta&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 8:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-kirpicha&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 9:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-blokov&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 10:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-penoblokov&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 11:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-gazoblokov&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 12:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-odnoskatnoy-krishi&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 13:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-dvuhskatnoy-krishi&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 14:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-mansardnoy-krishi&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      case 15:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-valmovoy-krishi&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
      default:
        getIframe.src =
          BASE_URL +
          "/widj?str=raschet-lentochnogo-fundamenta&bgcol=fff&tcol=000&elcol=ec7000&dis=none";
        break;
    }
  }
})();
