document.addEventListener("DOMContentLoaded", function () {

    // EVENT EXAMPLE (bisa nanti dari database Laravel)
    const events = [
        { date: "2025-12-10", title: "Interview UI/UX – Arya – 10:00 WIB" },
        { date: "2025-12-15", title: "Interview Backend – Sinta – 13:00 WIB" },
        { date: "2025-12-21", title: "Interview HRD – Dimas – 09:00 WIB" }
    ];

    const calendarTitle = document.getElementById("calendar-title");
    const calendarDates = document.getElementById("calendar-dates");

    const eventModal = new bootstrap.Modal(document.getElementById("eventModal"));
    const eventModalBody = document.getElementById("eventModalBody");

    let current = new Date();

    function renderCalendar() {
        const year = current.getFullYear();
        const month = current.getMonth();

        // Title bulan
        calendarTitle.innerText = current.toLocaleString("default", {
            month: "long",
        }) + " " + year;

        // Clear tanggal
        calendarDates.innerHTML = "";

        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        // Blank space
        for (let i = 0; i < firstDay; i++) {
            const blank = document.createElement("div");
            calendarDates.appendChild(blank);
        }

        // Buat tanggal-tanggal
        for (let day = 1; day <= lastDate; day++) {
            const dateDiv = document.createElement("div");
            dateDiv.innerText = day;

            const fullDate = `${year}-${String(month + 1).padStart(2, "0")}-${String(day).padStart(2, "0")}`;

            // Cek apakah tanggal punya event
            const dayEvents = events.filter(e => e.date === fullDate);

            if (dayEvents.length > 0) {
                const dot = document.createElement("div");
                dot.classList.add("event-dot");
                dateDiv.appendChild(dot);

                // Klik tanggal → buka modal
                dateDiv.addEventListener("click", () => {
                    showEventModal(fullDate, dayEvents);
                });
            }

            calendarDates.appendChild(dateDiv);
        }
    }

    // =====================================================================================
    // MODAL UNTUK MENAMPILKAN EVENT
    // =====================================================================================
    function showEventModal(date, dayEvents) {
        eventModalBody.innerHTML = `
            <h6 class="mb-2"><strong>Date:</strong> ${date}</h6>
            <hr>
        `;

        dayEvents.forEach(ev => {
            eventModalBody.innerHTML += `
                <div class="mb-3">
                    <p class="m-0">${ev.title}</p>
                </div>
            `;
        });

        eventModal.show();
    }

    // =====================================================================================
    // NAVIGASI BULAN
    // =====================================================================================

    document.getElementById("prev-month").onclick = () => {
        current.setMonth(current.getMonth() - 1);
        renderCalendar();
    };

    document.getElementById("next-month").onclick = () => {
        current.setMonth(current.getMonth() + 1);
        renderCalendar();
    };

    renderCalendar();
});
