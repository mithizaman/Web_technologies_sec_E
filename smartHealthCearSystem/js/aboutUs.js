document.addEventListener("DOMContentLoaded", function () {
  // Show more content when "See More" button is clicked
  const seeMoreBtn = document.getElementById("see-more-btn");
  const seeLessBtn = document.getElementById("see-less-btn");
  const moreContent = document.getElementById("more-content");

  seeMoreBtn.addEventListener("click", function () {
    moreContent.classList.remove("hidden");
    seeMoreBtn.classList.add("hidden");
    seeLessBtn.classList.remove("hidden");
  });

  // Hide more content when "See Less" button is clicked
    seeLessBtn.addEventListener("click", function () {
    moreContent.classList.add("hidden");
    seeMoreBtn.classList.remove("hidden");
    seeLessBtn.classList.add("hidden");
  });
});
