<footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-5 mb-md-4 mx-auto">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                    let clock = document.getElementById("digital-clock");
                    setInterval(() => {
                      let date = new Date();
                      clock.innerHTML = date.toLocaleTimeString();
                    }, 1000);

                    const timeElement = document.querySelector(".time");
                              const dateElement = document.querySelector(".date");

                              /**
                              * @param {Date} date
                              */
                              function formatTime(date) {
                                const hours12 = date.getHours() % 12 || 12;
                                const minutes = date.getMinutes();
                                const isAm = date.getHours() < 12;

                                return `${hours12.toString().padStart(2, "0")}:${minutes
                                  .toString()
                                  .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
                              }

                              /**
                              * @param {Date} date
                              */
                              function formatDate(date) {
                                const DAYS = [
                                  "Sunday",
                                  "Monday",
                                  "Tuesday",
                                  "Wednesday",
                                  "Thursday",
                                  "Friday",
                                  "Saturday"
                                ];
                                const MONTHS = [
                                  "January",
                                  "February",
                                  "March",
                                  "April",
                                  "May",
                                  "June",
                                  "July",
                                  "August",
                                  "September",
                                  "October",
                                  "November",
                                  "December"
                                ];

                                return `${DAYS[date.getDay()]}, ${
                                  MONTHS[date.getMonth()]
                                } ${date.getDate()} ${date.getFullYear()}`;
                              }

                              setInterval(() => {
                                const now = new Date();

                                timeElement.textContent = formatTime(now);
                                dateElement.textContent = formatDate(now);
                              }, 200);
                  </script>
                  made by SiMaK
                 
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html> 