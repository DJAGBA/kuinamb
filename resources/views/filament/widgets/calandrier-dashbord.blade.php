<div class="p-4 bg-white rounded-xl shadow">
    <h2 class="text-xl font-bold mb-4">Calendrier des événements</h2>

    <div id="calendar"></div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    {
                        title: 'Commande validée',
                        start: '2025-05-26'
                    },
                    {
                        title: 'Création boutique',
                        start: '2025-05-28'
                    },
                    // tu peux ajouter dynamiquement depuis PHP
                ]
            });
            calendar.render();
        });
    </script>
</div>
