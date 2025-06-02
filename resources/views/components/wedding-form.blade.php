<div>
    <h5 class="text-xl font-semibold text-accent mb-4">Bride & Groom Information</h5>
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-8 p-8 border border-primary/20 rounded">
        <!-- Groom -->
        <div class="flex flex-col gap-4">
            <h6 class="font-medium text-primary font-cursive text-6xl lg:mb-4 text-center">Groom's Data</h6>
            <div>
                <label class="mb-2" for="groom_name">Groom's Full Name</label>
                <input x-model="form.groom.name" id="groom_name" type="text" name="groom_name" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Groom's Full Name">
            </div>
            <div>
                <label class="mb-2" for="groom_birthdate">Groom's Birthdate</label>
                <input x-model="form.groom.birthdate" id="groom_birthdate" type="date" name="groom_birthdate" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded">
            </div>
            <div>
                <label class="mb-2" for="groom_phone">Groom's Phone Number</label>
                <input x-model="form.groom.phone" id="groom_phone" type="text" name="groom_phone" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Phone Number">
            </div>
            <div>
                <label class="mb-2" for="groom_father">Groom's Father</label>
                <input x-model="form.groom.father" id="groom_father" type="text" name="groom_father" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Father's Name">
            </div>
            <div>
                <label class="mb-2" for="groom_mother">Groom's Mother</label>
                <input x-model="form.groom.mother" id="groom_mother" type="text" name="groom_mother" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Mother's Name">
            </div>
        </div>

        <!-- Bride -->
        <div class="flex flex-col gap-4">
            <h6 class="font-medium text-primary font-cursive text-6xl lg:mb-4 text-center">Bride's Data</h6>
            <div>
                <label class="mb-2" for="bride_name">Bride's Full Name</label>
                <input x-model="form.bride.name" id="bride_name" type="text" name="bride_name" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Bride's Full Name">
            </div>
            <div>
                <label class="mb-2" for="bride_birthdate">Bride's Birthdate</label>
                <input x-model="form.bride.birthdate" id="bride_birthdate" type="date" name="bride_birthdate" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded">
            </div>
            <div>
                <label class="mb-2" for="bride_phone">Bride's Phone Number</label>
                <input x-model="form.bride.phone" id="bride_phone" type="text" name="bride_phone" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Phone Number">
            </div>
            <div>
                <label class="mb-2" for="bride_father">Bride's Father</label>
                <input x-model="form.bride.father" id="bride_father" type="text" name="bride_father" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Father's Name">
            </div>
            <div>
                <label class="mb-2" for="bride_mother">Bride's Mother</label>
                <input x-model="form.bride.mother" id="bride_mother" type="text" name="bride_mother" class="w-full p-2 border border-gray-300 focus:outline-accent focus:outline-2 rounded" placeholder="Mother's Name">
            </div>
        </div>
    </div>
</div>