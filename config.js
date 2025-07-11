module.exports = {
  proxy: {
    target: "localhost:8000",
    proxyReq: [
      function (proxyReq) {
        proxyReq.setHeader("Cookie", "PHPSESSID=your_session_id");
      },
    ],
  },
  files: ["**/*.php", "**/*.css", "**/*.js"],
  open: true,
  port: 3000, // BrowserSync port
  reloadDelay: 500, // Delay before reloading
  notify: false,
};
