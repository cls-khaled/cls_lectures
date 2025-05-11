const ctx1 = document.getElementById("chart-1").getContext("2d");
const myChart = new Chart(ctx1, {
  type: "polarArea",
  data: {
    labels: ["clothes", "Food", "Spare Parts"],
    datasets: [
      {
        label: "# of Votes",
        data: [600, 800, 1000],
        backgroundColor: [
          "rgb(1, 103, 88)",
          "rgb(214, 45, 194)",
          "rgba(255, 206, 86, 1)",
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

const ctx2 = document.getElementById("chart-2").getContext("2d");
const myChart2 = new Chart(ctx2, {
  type: "bar",
  data: {
    labels: ["Full stack", "PHP", "Angular"],
    datasets: [
      {
        label: "Earning",
        data: [600, 800, 1000],
        backgroundColor: [
          "rgb(64, 207, 131)",
          "rgba(255, 99, 132, 1)",
          "rgba(255, 206, 86, 1)",
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});
