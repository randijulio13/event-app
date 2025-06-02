<div class="p-4" x-data="eventForm()">
    <form @submit.prevent="submitForm">

        <div class="mb-8">
            <h4 class="font-bold text-2xl lg:text-4xl text-accent">Event Data</h4>
            <p class="text-sm lg:text-base text-primary/70">Please fill out the form to create new event.</p>
        </div>

        <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
            <div>
                <label class="mb-2" for="event_name">Event Name</label>
                <input type="text" name="event_name" x-model="form.eventName" id="event_name" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Enter event name">
            </div>
            <div>
                <label class="mb-2" for="event_date">Event Date</label>
                <input type="date" name="event_date" id="event_date" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded">
            </div>
            <div>
                <label class="mb-2" for="event_type">Event Type</label>
                <select
                    name="event_type"
                    id="event_type"
                    class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded"
                    x-model="form.eventType">
                    <option value="" disabled selected>Select event type</option>
                    <option :selected="form.eventType === 'wedding'" value="wedding">Wedding</option>
                    <!-- <option value="proposal">Proposal</option>
                    <option value="aqiqah">Aqiqah</option>
                    <option value="babyshower">Baby Shower</option>
                    <option value="birthday">Birthday</option>
                    <option value="graduation">Graduation</option>
                    <option value="corporate">Corporate</option>-->
                    <option value="other">Other</option>
                </select>
            </div>


            <div class="lg:col-span-3">
                <div class="mt-4" x-show="form.eventType === 'wedding'" x-cloak>
                    <x-wedding-form />
                </div>
            </div>

        </div>


        <div class="mt-6">
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded hover:bg-primary/90">Submit</button>
        </div>

    </form>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('eventForm', () => ({
            form: Alpine.$persist({
                eventName: '',
                eventType: '',
                groom: {
                    name: '',
                    birthdate: '',
                    phone: '',
                    father: '',
                    mother: ''
                },
                bride: {
                    name: '',
                    birthdate: '',
                    phone: '',
                    father: '',
                    mother: ''
                }
            }),
            error: {
                eventName: '',
                eventType: '',
                groom: {
                    name: '',
                    birthdate: '',
                    phone: '',
                    father: '',
                    mother: ''
                },
                bride: {
                    name: '',
                    birthdate: '',
                    phone: '',
                    father: '',
                    mother: ''
                }
            },
            init() {
                console.log('Alpine form initialized');
                // kamu bisa ambil nilai default di sini jika perlu
            },

            validate() {
                if (this.form.eventType === 'wedding') {
                    const groomFields = Object.values(this.form.groom);
                    const brideFields = Object.values(this.form.bride);
                    const allFilled = [...groomFields, ...brideFields].every(value => value && value.trim() !== '');
                    if (!allFilled) {
                        alert('Semua data pengantin pria dan wanita harus diisi untuk event wedding.');
                        return false;
                    }
                }
                return true;
            },

            submitForm() {
                if (!this.validate()) return
                // Simulasi submit
                alert(`Submitting form for ${this.eventType} event`);
                // Untuk AJAX request, gunakan fetch atau axios jika ingin lanjut
            }
        }))
    })
</script>