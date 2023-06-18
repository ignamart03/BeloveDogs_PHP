/*function changeImages(images) {
    var imageContainer = document.getElementById('imageContainer');
    imageContainer.innerHTML = '';

    var imagePaths = [];

    if (images === 'images1') {
      imagePaths = [
        'images/adoptap1.jpg',
        'images/adoptap2.jpg',
        'images/adoptap3.jpg',
        'images/adoptap4.jpg',
        'images/juan.jpg',
      ];
    } else if (images === 'images2') {
      imagePaths = [
        'images/adoptap4.jpg',
        'images/adoptap3.jpg',
        'images/adoptap2.jpg',
        'images/adoptap1.jpg',
      ];
    }

    var txtPics = [];

    if (images === 'images1') {
        txtPics = [
            'Perro 1',
            'Perro 2',
            'Perro 3',
            'Perro 4',
        ];
    } else if (images === 'images2') {
        txtPics = [
            'Perro 4',
            'Perro 3',
            'Perro 2',
            'Perro 1',
        ];
    }

    imagePaths.forEach(function(path) {
      var img = document.createElement('img');
      var txt = document.createElement('txt');
      txt.innerHTML = txtPics;
      img.src = path;
      img.classList.add('image');
      txt.classList.add('text');
      imageContainer.appendChild(img);
      imageContainer.appendChild(txt);
    });
  }*/

  function showContainer(containerId) {
    var containers = document.querySelectorAll('.container');
    for (var i = 0; i < containers.length; i++) {
      containers[i].classList.remove('show');
    }
    var containerToShow = document.querySelector('.' + containerId);
    containerToShow.classList.add('show');
  }