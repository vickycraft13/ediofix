const angle = ["Bird", "High", "Eye", "Low", "Frog"];
const frame = ["ECU", "BCU", "CU", "MCU", "MS", "FS", "LS"];
const angledesc = [
  "Merupakan sudut kamera yang paling tinggi dimana kamera ditempatkan jauh lebih tinggi dari objek yang direkam Hal ini membuat gambar terlihat seperti diambil dari sudut pandang seekor burung yang sedang terbang.",
  "Merupakan sudut kamera yang diambil dari atas objek namun lebih rendah dari Bird Eye View, memberikan kesan objek lebih rendah",
  "Adalah sudut kamera yang diletakan sejajar dengan objek. Sudut pengambilan gambar ini yang seringkali digunakan oleh juru kamera, karena mudah untuk dilakukan.",
  "Pada sudut pengambilan ini, kamera diletakan lebih rendah daripada objek dan pengambilan gambar dilakukan dari bawah.Sudut ini digunakan ketika ingin memperlihatkan tokoh yang memiliki tingkatan lebih tinggi.",
  "Merupakan pengambilan gambar paling rendah dimana penempatan kamera sejajar dengan posisi dasar dari sebuah objek. Frog Eye memberikan kesan dramatis dan memperlihatkan visual yang menarik.",
];
const framedesc = [
  "Merupakan ukuran shot yang sangat dekat dengan objek, ditujukan untuk menampilkan detail dari sebuah objek",
  "Memiliki ukuran frame dari batas kepala hingga dagu pada objek manusia. ditujukan untuk memperlihatkan ekspresi wajah.",
  "Adalah ukuran frame dengan batas kepala hingga leher bagian bawah pada objek manusia. Digunakan untuk memberikan gambar objek dengan jelas.",
  "Digunakan untuk menegaskan profil objek, dengan menggunakan ukuran dari batas kepala hingga dada bagian atas.",
  "Digunakan untuk memperlihatkan penampilan dan tampang dari objek. Ukuran yang digunakan adalah dari batas kepala hingga perut bagian bawah/pinggang.",
  "Memiliki fungsi untuk memperlihatkan keseluruhan objek dengan lingkungan sekitar. memiliki ukuran dari batas kepala hingga kaki.",
  "Merupakan jenis shot yang paling lebar, digunakan untuk memperlihatkan lingkungan yang ada disekitar objek.",
];
const movedesc = [
  "Merupakan gerakan kamera yang memutar mengitari objek dari kiri ke kanan maupun sebaliknya. Pergerakan Arc digunakan untuk memperlihatkan penampilan objek secara orbital.",
  "Teknik camera crab dilakukan dengan cara menyamping. Digunakan untuk mengikuti objek yang sedang bergerak kearah samping",
  "Teknik Dolly dilakukan dengan cara menggerakan kamera mendekati atau manjauhi objek dengan menggerakan kamera diatas slider, rel atau drone.",
  "Merupakan gerakan kamera menoleh ke kiri dan ke kanan. Gerakan ini digunakan untuk menampilkan urutan objek yang rapi.",
  "Merupakan kamera yang disimpan di atas tripod maupun penyangga lainnya, yang kemudian dinaik turunkan untuk menghasilkan gerakan vertikal",
  "Adalah gerakan kamera secara vertikal, mendongkak dari bawah ke atas (Tilt Up) dan dari atas ke bawah (Tilt Down). Gerakan ini digunakan untuk menggiring mata penonton untuk memperlihatkan sosok tertentu dan menimbulkan rasa penasaran pada penonton.",
  "Teknik zooming dilakukan dengan cara menekati atau menjauhi objek secara optikal, dengan mengatur panjang focal lensa yang diubah dari sudut pandang sempit ke sudut pandang lebar.",
];
const anglename = [
  "Bird Eye",
  "High Angle",
  "Eye Level",
  "Low Angle",
  "Frog Eye",
];
const framename = [
  "Extreme Close Up",
  "Big Close Up",
  "Close Up",
  "Medium Close Up",
  "Medium Shot",
  "Full Shot",
  "Long Shot",
];
let angleout = angle[2];
let frameout = frame[3];
let anglenama = anglename[2];
let framenama = framename[3];
let descangle = angledesc[2];
let descframe = framedesc[3];
let descmove = movedesc[0];
$(".anglecam").on("change", function () {
  let val = $(this).val();
  $("#angle_value").html(anglename[val - 1]);
  anglenama = anglename[val - 1];
  angleout = angle[val - 1];
  descangle = angledesc[val - 1];
});
$(".framesize").on("change", function () {
  let val = $(this).val();
  $("#frame_value").html(framename[val - 1]);
  framenama = framename[val - 1];
  frameout = frame[val - 1];
  descframe = framedesc[val - 1];
});
$(".move").on("change", function () {
  let val = $(".move").val();
  var movementcam = val.split(" ");
  const idx = parseInt(movementcam[1]);
  console.log(idx);
  descmove = movedesc[idx - 1];
  console.log(descmove);
});
$("#simulate").click(function () {
  var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
  myModal.show();
  setTimeout(function () {
    var moveout = $(".move").val();
    var movementcam = moveout.split(" ");
    moveout = movementcam[0];
    if (frameout == "ECU") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video>  <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./ExtremeCloseUp/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    } else if (frameout == "BCU") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./BigCloseUp/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    } else if (frameout == "CU") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./CloseUp/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    } else if (frameout == "MCU") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./MediumCloseUp/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    } else if (frameout == "MS") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./MediumShot/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    } else if (frameout == "FS") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./FullShot/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    } else if (frameout == "LS") {
      $("video").remove();
      $(".movement").remove();
      $(".prev").remove();
      $("#video1").append(
        "<video class='mt-2 vid-prev'  muted autoplay loop> <source src='./Animation/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='movement'>MOVEMENT</p>"
      );
      $("#video2").append(
        "<video class='mt-2 vid-move'  muted autoplay loop> <source src='./LongShot/" +
          angleout +
          "-" +
          frameout +
          "-" +
          moveout +
          ".mp4' id='videotrick'> Your browser does not support the video tag.</video> <p class='prev'>PREVIEW</p>"
      );
    }
    $(".angleexp").html("<b>" + anglenama + " :</b> " + descangle);
    $(".frameexp").html("<b>" + framenama + " : </b>" + descframe);
    $(".moveexp").html("<b>" + moveout + " :</b> " + descmove);
    myModal.hide();
  }, 2000);
});
