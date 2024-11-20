document.addEventListener("DOMContentLoaded", () => {
  const imageContainer = document.getElementById("image-container");

  // รายชื่อไฟล์รูปภาพในโฟลเดอร์ pic
  const images = [
    "image1.jpg",
    "image2.png",
    "image3.jpeg"
  ];

  // สร้าง Element <img> และลิงก์ดาวน์โหลดสำหรับแต่ละรูป
  images.forEach((image) => {
    const wrapper = document.createElement("div");
    wrapper.classList.add("image-wrapper");

    const imgElement = document.createElement("img");
    imgElement.src = `pic/${image}`;
    imgElement.alt = image;

    const downloadLink = document.createElement("a");
    downloadLink.href = `pic/${image}`;
    downloadLink.download = image;
    downloadLink.textContent = "Download";
    downloadLink.classList.add("download-btn");

    wrapper.appendChild(imgElement);
    wrapper.appendChild(downloadLink);
    imageContainer.appendChild(wrapper);
  });
});
