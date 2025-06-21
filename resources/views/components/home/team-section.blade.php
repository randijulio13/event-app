<div class="flex items-center justify-center flex-col">
    <x-section-title>Meet Our Amazing Team</x-section-title>
    <p class="my-8 text-primary tracking-wider text-center">
    Behind every successful event stands our dedicated team of experienced professionals. 
    </p>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
    @foreach($teams as $team)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
            <div class="relative overflow-hidden">
                <img src="{{ Storage::url($team->photo) }}" alt="{{ $team->name }}" class="w-full h-64 object-cover object-center transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center space-x-4">
                    @if($team->facebook_url)
                        <a href="{{ $team->facebook_url }}" target="_blank" class="text-white hover:text-primary transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5L14.21.5C10.57.5,9.82,3.44,9.82,6.46v1H7.23v4.37h2.59V22h4.68V11.83h3.45l.46-4.37Z"/></svg>
                        </a>
                    @endif
                    @if($team->twitter_url)
                        <a href="{{ $team->twitter_url }}" target="_blank" class="text-white hover:text-primary transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.32,6.44a.5.5,0,0,0-.2-.87l-.79-.19A.5.5,0,0,1,22,4.67L22.2,3.87a.5.5,0,0,0-.76-.58l-.85.64a.5.5,0,0,1-.68-.07L19.2,3.05a.5.5,0,0,0-.85.36l-.07,1.1a.5.5,0,0,1-.56.44L16.6,4.82a.5.5,0,0,0-.57.59l.27,1.07a.5.5,0,0,1-.31.6L14.9,7.5a.5.5,0,0,0-.15.89l.9.47a.5.5,0,0,1,.25.63L15.45,10a.5.5,0,0,0,.62.68l1-.26a.5.5,0,0,1,.61.26l.38.92a.5.5,0,0,0,.9-.1l.3-1a.5.5,0,0,1,.59-.32l1.06.2a.5.5,0,0,0,.61-.57l-.21-1.06a.5.5,0,0,1,.35-.57l1-.29a.5.5,0,0,0,.29-.82l-.63-.85A.5.5,0,0,1,22,6.6l.85-.64A.5.5,0,0,0,23.32,6.44Z"/></svg>
                        </a>
                    @endif
                    @if($team->instagram_url)
                        <a href="{{ $team->instagram_url }}" target="_blank" class="text-white hover:text-primary transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2.16c3.2,0,3.58,0,4.85.07,3.25.15,4.77,1.69,4.92,4.92.06,1.27.07,1.65.07,4.85s0,3.58-.07,4.85c-.15,3.23-1.66,4.77-4.92,4.92-1.27.06-1.64.07-4.85.07s-3.58,0-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.64-.07-4.85s0-3.58.07-4.85C2.38,3.92,3.9,2.38,7.15,2.23,8.42,2.18,8.8,2.16,12,2.16ZM12,0C8.74,0,8.33,0,7.05.07c-4.27.2-6.78,2.71-7,7C0,8.33,0,8.74,0,12s0,3.67.07,4.95c.2,4.27,2.71,6.78,7,7C8.33,24,8.74,24,12,24s3.67,0,4.95-.07c4.27-.2,6.78-2.71,7-7C24,15.67,24,15.26,24,12s0-3.67-.07-4.95c-.2-4.27-2.71-6.78-7-7C15.67,0,15.26,0,12,0Zm0,5.84A6.16,6.16,0,1,0,18.16,12,6.16,6.16,0,0,0,12,5.84ZM12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM18.41,4.15a1.44,1.44,0,1,0,1.44,1.44A1.44,1.44,0,0,0,18.41,4.15Z"/></svg>
                        </a>
                    @endif
                    @if($team->linkedin_url)
                        <a href="{{ $team->linkedin_url }}" target="_blank" class="text-white hover:text-primary transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z"/></svg>
                        </a>
                    @endif
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900">{{ $team->name }}</h3>
                <p class="text-primary mt-1">{{ $team->position }}</p>
                <p class="text-gray-600 mt-4 text-sm">{{ $team->bio }}</p>
            </div>
        </div>
    @endforeach
</div> 
</div>