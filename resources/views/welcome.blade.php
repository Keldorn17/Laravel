<x-guest-app-layout>
    {{--            Hero            --}}
    <section
        class="w-full flex flex-col items-center justify-start text-center pt-32 px-6 py-10 bg-gradient-to-b from-white to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-4xl">
            <h2 class="text-5xl md:text-6xl font-extrabold text-indigo-600 dark:text-indigo-400 mb-6">
                Üdvözöljük a Felvételi Menedzsment Rendszerben
            </h2>
            <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                Egyszerűsítse az iskola működésének kezelését. Jelentkezzen be a diákok adatainak eléréséhez, a
                kurzusok kezeléséhez és a felvéleti adatok kezeléséhez – mindezt egy helyen.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/login"
                   class="bg-indigo-600 dark:bg-indigo-500 hover:bg-indigo-700 dark:hover:bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold transition">
                    Kezdés
                </a>
                <a href="#features"
                   class="border border-indigo-600 dark:border-indigo-400 text-indigo-600 dark:text-indigo-400 hover:bg-indigo-600 hover:text-white dark:hover:bg-indigo-500 dark:hover:text-white px-6 py-3 rounded-lg font-semibold transition">
                    Tudjon meg többet
                </a>
            </div>
        </div>
    </section>
    {{--            Features            --}}
    <section id="features" class="w-full py-16 px-6 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-indigo-600 dark:text-indigo-400 mb-12">
                Funkciók
            </h3>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-indigo-300 dark:hover:shadow-indigo-500 transition">
                    <h4 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-2">Biztonságos
                        bejelentkezés</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Biztonságosan férhet hozzá fiókjához modern hitelesítéssel és szerepkör alapú
                        jogosultságokkal.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-indigo-300 dark:hover:shadow-indigo-500 transition">
                    <h4 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-2">Kurzusok
                        kezelése</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Egyszerűen hozhat létre, frissíthet és rendszerezhet kurzusokat részletes ütemtervekkel és
                        beiratkozási lehetőségekkel.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div
                    class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-indigo-300 dark:hover:shadow-indigo-500 transition">
                    <h4 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-2">Felvételi adatok
                        kezelése</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Gyors és egyszerű kezelése a felvételi adatoknak egy letisztult felületen keresztül.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{--            Company            --}}
    <section id="about" class="w-full py-20 px-6 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-4xl font-bold text-indigo-600 dark:text-indigo-400 mb-6">
                Rendszerünkről
            </h3>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                A <span
                    class="font-semibold text-indigo-600 dark:text-indigo-400">Felvételi Menedzsment Rendszer</span>
                egy modern platform, amely az iskola működését egyszerűsíti.
                Segítségével a <strong>kurzusok kezelése</strong> egyszerűen megoldható: létrehozhat, frissíthet és
                rendszerezhet kurzusokat részletes ütemtervekkel és beiratkozási lehetőségekkel.
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                Küldetésünk, hogy az intézmények számára biztosítsuk azokat az eszközöket, amelyekkel növelhetik a
                hatékonyságot, javíthatják a kommunikációt, és biztosíthatják a tanulmányi sikereket.
                Intuitív irányítópultokkal, valós idejű frissítésekkel és hatékony adatvezérelt elemzésekkel tesszük
                az iskola menedzsmentjét okosabbá, jobban összekapcsolttá és mindenki számára elérhetővé.
            </p>
            <div class="flex justify-center">
                <a href="{{ route('contact') }}"
                   class="mt-6 bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold transition">Kapcsolat</a>
            </div>
        </div>
    </section>
</x-guest-app-layout>
