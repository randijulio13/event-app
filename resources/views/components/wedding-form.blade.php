<div>
    <h5 class="text-xl font-semibold text-accent mb-4">Bride & Groom Information</h5>
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-8 ">
        <!-- Groom -->
        <div class="flex flex-col gap-4 p-8 border border-primary/20 rounded-xl">
            <h6 class="font-medium text-primary font-cursive text-6xl lg:mb-4 text-center">Groom's Data</h6>
            <div>
                <label class="mb-2" for="groom_name">Full Name</label>
                <input 
                    x-model="form.groom.name" 
                    id="groom_name" 
                    type="text" 
                    name="groom_name" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.groom.name}"
                    placeholder="Groom's Full Name"
                    @blur="validateWeddingField('groom', 'name')">
                <p class="text-red-500 text-sm mt-1" x-show="error.groom.name" x-text="error.groom.name"></p>
            </div>
            <div>
                <label class="mb-2" for="groom_birthdate">Birthdate</label>
                <input 
                    x-model="form.groom.birthdate" 
                    id="groom_birthdate" 
                    type="date" 
                    name="groom_birthdate" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.groom.birthdate}"
                    @blur="validateWeddingField('groom', 'birthdate')">
                <p class="text-red-500 text-sm mt-1" x-show="error.groom.birthdate" x-text="error.groom.birthdate"></p>
            </div>
            <div>
                <label class="mb-2" for="groom_phone">Phone Number</label>
                <input 
                    x-model="form.groom.phone" 
                    id="groom_phone" 
                    type="text" 
                    name="groom_phone" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.groom.phone}"
                    placeholder="Phone Number"
                    @blur="validateWeddingField('groom', 'phone')">
                <p class="text-red-500 text-sm mt-1" x-show="error.groom.phone" x-text="error.groom.phone"></p>
            </div>
            <div>
                <label class="mb-2" for="groom_father">Father</label>
                <input 
                    x-model="form.groom.father" 
                    id="groom_father" 
                    type="text" 
                    name="groom_father" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.groom.father}"
                    placeholder="Father's Name"
                    @blur="validateWeddingField('groom', 'father')">
                <p class="text-red-500 text-sm mt-1" x-show="error.groom.father" x-text="error.groom.father"></p>
            </div>
            <div>
                <label class="mb-2" for="groom_mother">Mother</label>
                <input 
                    x-model="form.groom.mother" 
                    id="groom_mother" 
                    type="text" 
                    name="groom_mother" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.groom.mother}"
                    placeholder="Mother's Name"
                    @blur="validateWeddingField('groom', 'mother')">
                <p class="text-red-500 text-sm mt-1" x-show="error.groom.mother" x-text="error.groom.mother"></p>
            </div>
        </div>

        <!-- Bride -->
        <div class="flex flex-col gap-4 p-8 border border-primary/20 rounded-xl">
            <h6 class="font-medium text-primary font-cursive text-6xl lg:mb-4 text-center">Bride's Data</h6>
            <div>
                <label class="mb-2" for="bride_name">Full Name</label>
                <input 
                    x-model="form.bride.name" 
                    id="bride_name" 
                    type="text" 
                    name="bride_name" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.bride.name}"
                    placeholder="Bride's Full Name"
                    @blur="validateWeddingField('bride', 'name')">
                <p class="text-red-500 text-sm mt-1" x-show="error.bride.name" x-text="error.bride.name"></p>
            </div>
            <div>
                <label class="mb-2" for="bride_birthdate">Birthdate</label>
                <input 
                    x-model="form.bride.birthdate" 
                    id="bride_birthdate" 
                    type="date" 
                    name="bride_birthdate" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.bride.birthdate}"
                    @blur="validateWeddingField('bride', 'birthdate')">
                <p class="text-red-500 text-sm mt-1" x-show="error.bride.birthdate" x-text="error.bride.birthdate"></p>
            </div>
            <div>
                <label class="mb-2" for="bride_phone">Phone Number</label>
                <input 
                    x-model="form.bride.phone" 
                    id="bride_phone" 
                    type="text" 
                    name="bride_phone" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.bride.phone}"
                    placeholder="Phone Number"
                    @blur="validateWeddingField('bride', 'phone')">
                <p class="text-red-500 text-sm mt-1" x-show="error.bride.phone" x-text="error.bride.phone"></p>
            </div>
            <div>
                <label class="mb-2" for="bride_father">Father</label>
                <input 
                    x-model="form.bride.father" 
                    id="bride_father" 
                    type="text" 
                    name="bride_father" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.bride.father}"
                    placeholder="Father's Name"
                    @blur="validateWeddingField('bride', 'father')">
                <p class="text-red-500 text-sm mt-1" x-show="error.bride.father" x-text="error.bride.father"></p>
            </div>
            <div>
                <label class="mb-2" for="bride_mother">Mother</label>
                <input 
                    x-model="form.bride.mother" 
                    id="bride_mother" 
                    type="text" 
                    name="bride_mother" 
                    class="w-full px-4 py-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded-full"
                    :class="{'border-red-500': error.bride.mother}"
                    placeholder="Mother's Name"
                    @blur="validateWeddingField('bride', 'mother')">
                <p class="text-red-500 text-sm mt-1" x-show="error.bride.mother" x-text="error.bride.mother"></p>
            </div>
        </div>
    </div>
</div>