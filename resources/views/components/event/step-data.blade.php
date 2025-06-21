<div x-show="step === 1">

    <div class="mb-8">
        <h4 class="font-bold text-2xl lg:text-4xl text-accent">Event Data</h4>
        <p class="text-sm lg:text-base text-primary/70">Please fill out the form to create new event.</p>
    </div>

    <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div>
            <label class="mb-2" for="event_name">Event Name</label>
            <input type="text" name="event_name" x-model="form.eventName" id="event_name"
                class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                :class="{'border-red-500': error.eventName}" placeholder="Enter event name"
                @blur="validateField('eventName')">
            <p class="text-red-500 text-sm mt-1" x-show="error.eventName" x-text="error.eventName"></p>
        </div>
        <div>
            <label class="mb-2" for="event_date">Event Date</label>
            <input type="date" name="event_date" id="event_date" x-model="form.eventDate"
                class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                :class="{'border-red-500': error.eventDate}" @blur="validateField('eventDate')">
            <p class="text-red-500 text-sm mt-1" x-show="error.eventDate" x-text="error.eventDate"></p>
        </div>
        <div>
            <label class="mb-2" for="event_type">Event Type</label>
            <select name="event_type" id="event_type"
                class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                :class="{'border-red-500': error.eventType}" x-model="form.eventType"
                @change="validateField('eventType')">
                <option value="" disabled selected>Select event type</option>
                <option :selected="form.eventType === 'wedding'" value="wedding">Wedding</option>
                <!-- <option value="other">Other</option> -->
            </select>
            <p class="text-red-500 text-sm mt-1" x-show="error.eventType" x-text="error.eventType"></p>
        </div>


        <div class="lg:col-span-3">
            <div class="mt-4" x-show="form.eventType === 'wedding'" x-cloak>
                <x-wedding-form />
            </div>
        </div>

    </div>


</div>