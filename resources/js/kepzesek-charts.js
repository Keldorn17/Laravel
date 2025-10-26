import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const kepzesek = window.kepzesek;

    const labels = kepzesek.map(k => k.nev);
    const felvehetoData = kepzesek.map(k => k.felveheto);
    const minimumData = kepzesek.map(k => k.minimum);

    function cssVar(name) {
        return getComputedStyle(document.documentElement).getPropertyValue(name).trim();
    }

    function applyTheme() {
        const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const textColor = cssVar(isDark ? '--chart-text-light' : '--chart-text-dark');

        Chart.defaults.color = textColor;
        Chart.defaults.plugins.legend.labels.color = textColor;

        Chart.defaults.scales.linear.ticks.color = textColor;
        Chart.defaults.scales.category.ticks.color = textColor;
    }

    applyTheme();

    const barChart = new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels,
            datasets: [
                {
                    label: 'Felvehető (max)',
                    data: felvehetoData,
                    backgroundColor: cssVar('--blue') + '80',
                    borderColor: cssVar('--blue')
                },
                {
                    label: 'Minimum pont',
                    data: minimumData,
                    backgroundColor: cssVar('--red') + '80',
                    borderColor: cssVar('--red')
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: { grid: { color: cssVar('--chart-grid') } },
                x: { grid: { color: cssVar('--chart-grid') } }
            }
        }
    });

    const doughnutChart = new Chart(document.getElementById('doughnutChart'), {
        type: 'doughnut',
        data: {
            labels,
            datasets: [{
                data: felvehetoData,
                backgroundColor: [
                    cssVar('--blue') + 'b3',
                    cssVar('--red') + 'b3',
                    cssVar('--green') + 'b3',
                    cssVar('--yellow') + 'b3',
                    cssVar('--purple') + 'b3',
                    cssVar('--pink') + 'b3',
                ],
                borderColor: cssVar('--chart-bg'),
                borderWidth: 2
            }]
        }
    });

    new MutationObserver(() => {
        applyTheme();
        barChart.update();
        doughnutChart.update();
    }).observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });
});
