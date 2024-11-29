@extends('layouts.generator')

@section('title', 'Keterampilan Non Teknis | CVRE GENERATE')

@section('content')
<!-- Form Keterampilan Non Teknis -->
<div class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50">
    <!-- Background -->
    <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="{{ route('cv', ['section' => 'detail_pribadi']) }}" class="text-blue-700 hover:underline text-sm flex items-center">
            <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <!-- Stepper -->
    <div class="flex justify-center mt-8 mb-20">
        <div class="flex items-center">
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white font-bold">
                <img src="{{ asset('images/icons/done.svg') }}" alt="Check Icon" class="w-6 h-6" />
            </div>
            <div class="w-28 h-px bg-blue-700"></div>

            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white text-3xl">
                2
            </div>
            <div class="w-28 h-px bg-blue-700"></div>

            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-gray-300 text-gray-700 text-3xl">
                3
            </div>
        </div>
    </div>

    <!-- Form Container -->
    <form method="POST" action="{{ route('cv', ['section' => 'keterampilan_teknis']) }}" class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20 grid grid-cols-1 md:grid-cols-2 gap-8" style="max-width: 1000px; width: 100%;">
        @csrf
        <h2 class="text-2xl text-center text-blue-800 md:col-span-2 mb-8">Keterampilan Non Teknis</h2>

        <!-- Left Section: Keahlian dan Level -->
        <div class="space-y-6">
            <div class="col-span-4">
                <textarea id="summary" name="summary" class="hidden"></textarea>
                <div id="editor" class="bg-white rounded border border-gray-300" style="height: 150px"></div>
              </div>
        </div>

        <!-- Right Section: Pencarian Bidang Pekerjaan -->
        <div class="space-y-6 border-2 border-gray-300 rounded-lg p-4">
            <!-- Input Search -->
            <input
                type="text"
                name="search_job"
                id="search-job"
                placeholder="Cari Berdasarkan Bidang Pekerjaan"
                class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none p-3"
                oninput="filterJobs()"
            />

            <!-- Job Search Results (Initially Hidden) -->
            <ul id="job-list" class="space-y-2" style="display: none;">
                <!-- Example Job Items (dynamic content will be injected) -->
            </ul>
        </div>

        <!-- Submit Button -->
        <div class="md:col-span-2">
            <button type="submit" class="mt-6 w-full py-4 bg-blue-700 text-white text-sm font-medium rounded shadow hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition">
                Langkah Selanjutnya
            </button>
        </div>
    </form>
</div>

<!-- SortableJS Library -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Inisialisasi Quill
        var quill = new Quill("#editor", {
          theme: "snow",
          placeholder: "Deskripsi",
          modules: {
            toolbar: [
              ["bold", "italic", "underline"], // Bold, Italic, Underline
              [{ list: "ordered" }, { list: "bullet" }], // Ordered & Unordered List
            ],
          },
        });

        // Set Font Poppins untuk Quill Editor
        quill.root.style.fontFamily = "Poppins, sans-serif";

        // Simpan data Quill ke textarea
        var summaryTextarea = document.getElementById("summary");
        quill.on("text-change", function () {
          summaryTextarea.value = quill.root.innerHTML;
        });
      });

    document.addEventListener('DOMContentLoaded', () => {
        // Job skills data for filtering
        const jobSkills = {
            "Product Designer": ["Figma", "Illustrator", "Sketch", "Photoshop", "Canva", "Affinity Designer", "Adobe XD", "Invision", "Axure RP", "Balsamiq"],
            "Web Developer": ["HTML", "CSS", "JavaScript", "React", "Node.js", "Vue.js", "TypeScript", "Sass", "Bootstrap", "Git"],
            "Graphic Designer": ["Illustrator", "Photoshop", "InDesign", "CorelDRAW", "Canva", "Sketch", "Figma", "Adobe XD", "After Effects", "Premiere Pro"]
        };

        const jobList = document.getElementById('job-list');
        const searchInput = document.getElementById('search-job');

        // Initially hide the job list
        jobList.style.display = 'none';

        // Listen to the search input for changes
        searchInput.addEventListener('input', filterJobs);

        function filterJobs() {
            const searchInputValue = searchInput.value.toLowerCase();
            jobList.innerHTML = ''; // Clear previous results

            // Show recommendations only if searchInput has 3 or more characters
            if (searchInputValue.length >= 10) {
                Object.keys(jobSkills).forEach(job => {
                    if (job.toLowerCase().includes(searchInputValue)) {
                        jobList.style.display = 'block'; // Show the job list

                        // Display job recommendations
                        jobSkills[job].forEach(skill => {
                            const skillItem = document.createElement('li');
                            skillItem.classList.add('text-gray-700', 'flex', 'justify-between', 'items-center', 'bg-gray-50', 'p-2', 'rounded', 'shadow-sm', 'job-item');

                            const skillName = document.createElement('span');
                            skillName.textContent = skill;

                            const selectButton = document.createElement('button');
                            selectButton.type = 'button';
                            selectButton.classList.add('text-blue-500', 'hover:text-blue-700');
                            selectButton.textContent = 'Pilih';
                            selectButton.addEventListener('click', () => addSkillToForm(skill)); // Add to skill form input

                            skillItem.appendChild(skillName);
                            skillItem.appendChild(selectButton);
                            jobList.appendChild(skillItem);
                        });
                    }
                });
            } else {
                jobList.style.display = 'none'; // Hide the job list if less than 3 characters
            }
        }

        // Function to add selected skill to the form
        function addSkillToForm(skill) {
            const languageList = document.getElementById('language-list');
            const newSkillItem = document.createElement('li');
            newSkillItem.classList.add('rounded', 'flex', 'items-center', 'justify-between');
            newSkillItem.innerHTML =
                `<div class="flex items-center space-x-4 w-full">
                    <div class="cursor-move text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                        </svg>
                    </div>
                    <div class="grid grid-cols-2 gap-4 w-full">
                        <div class="col-span-1">
                            <input type="text" name="language[]" value="${skill}" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none p-3" />
                        </div>
                        <div class="col-span-1">
                            <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 50px; padding: 0 10px;">
                                <option value="Ahli">Ahli</option>
                                <option value="Berpengalaman">Berpengalaman</option>
                                <option value="Terampil">Terampil</option>
                                <option value="Menengah">Menengah</option>
                                <option value="Pemula">Pemula</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="text-red-500 hover:text-red-700 transition ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                    </svg>
                </button>`;

            languageList.appendChild(newSkillItem);

            // Initialize SortableJS for the newly added language list
            Sortable.create(languageList, {
                animation: 150,  // Animation duration
                handle: '.cursor-move',  // Only allow dragging using the drag icon
                ghostClass: 'bg-blue-200',  // Style while dragging
            });

            // Close the job recommendations list after selecting a skill
            jobList.style.display = 'none';
            jobList.innerHTML = ''; // Clear job list to prepare for the next search
        }

        // Initialize SortableJS for Language List when DOM is loaded
        const languageList = document.getElementById('language-list');
        Sortable.create(languageList, {
            animation: 150,  // Animation duration
            handle: '.cursor-move',  // Only allow dragging using the drag icon
            ghostClass: 'bg-blue-200',  // Style while dragging
        });

        // Add new language input when the button is clicked
        document.getElementById('add-language-btn').addEventListener('click', function () {
            // Validate if all current inputs are filled
            const inputs = document.querySelectorAll('input[name="language[]"]');
            const selects = document.querySelectorAll('select[name="level[]"]');
            let allFilled = true;

            inputs.forEach((input, index) => {
                if (!input.value || !selects[index].value) {
                    allFilled = false;
                }
            });

            // Prevent adding new fields if any input is empty
            if (!allFilled) {
                alert("Pastikan semua form keahlian dan level telah diisi sebelum menambah keterampilan baru.");
                return;
            }

            // Add new skill form
            const languageForm = `
                <li class="rounded flex items-center justify-between">
                    <div class="flex items-center space-x-4 w-full">
                        <div class="cursor-move text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-2 gap-4 w-full">
                            <div class="col-span-1">
                                <input type="text" name="language[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none p-3" placeholder="Keahlian" required />
                            </div>
                            <div class="col-span-1">
                                <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 50px; padding: 0 10px;" required>
                                    <option value="" disabled selected>Pilih Level</option>
                                    <option value="Ahli">Ahli</option>
                                    <option value="Berpengalaman">Berpengalaman</option>
                                    <option value="Terampil">Terampil</option>
                                    <option value="Menengah">Menengah</option>
                                    <option value="Pemula">Pemula</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-red-500 hover:text-red-700 transition ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                        </svg>
                    </button>
                </li>`;

            document.getElementById('language-list').insertAdjacentHTML('beforeend', languageForm);
        });
    });
</script>

