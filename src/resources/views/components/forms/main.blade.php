<form wire:submit.prevent="save" class="divide-gray-200 max-w-4xl mx-auto bg-[#CDCDCD] p-6 rounded-lg shadow-lg mt-4">
    <div class="space-y-8">
        <!-- Heading -->
        <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">Aanmeld formulier</h3>
            <p class="mt-1 text-sm text-gray-600">We hebben nog wat meer informatie nodig voor de bruiloft.</p>
        </div>

        <!-- Form Fields -->
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <!-- Name -->
            <div class="sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                <input type="text" id="name" wire:model="name"
                       class="p-2 mt-1 block w-full rounded-md sm:text-sm bg-[#E3E3E3] placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8D8D8D] focus:border-[#8D8D8D]"
                       placeholder="Jouw naam"/>

            </div>

            <!-- Email -->
            <div class="sm:col-span-3">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" wire:model="email"
                       class="p-2 mt-1 block w-full rounded-md sm:text-sm bg-[#E3E3E3] placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8D8D8D] focus:border-[#8D8D8D]"
                       placeholder="jouw@email.com"/>
            </div>

            <!-- Phone -->
            <div class="sm:col-span-3">
                <label for="telefoonnummer" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                <input type="text" id="telefoonnummer" wire:model="telefoonnummer"
                       class="p-2 mt-1 block w-full rounded-md sm:text-sm bg-[#E3E3E3] placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8D8D8D] focus:border-[#8D8D8D]"
                       placeholder="06 12345678"/>
            </div>

            <!-- Allergies/Diet -->
            <div class="sm:col-span-6">
                <label for="extra" class="block text-sm font-medium text-gray-700">Allergie / Dieet</label>
                <textarea id="extra" wire:model="extra"
                          class="p-2 mt-1 block w-full rounded-md sm:text-sm bg-[#E3E3E3] placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8D8D8D] focus:border-[#8D8D8D]"
                          placeholder="Voeg hier dieetwensen toe..."></textarea>
            </div>

            <!-- Main Course -->
            <div class="sm:col-span-3">
                <label for="main" class="block text-sm font-medium text-gray-700">Hoofdgerecht</label>
                <select id="main" wire:model="main"
                        class="p-2 mt-1 block w-full rounded-md sm:text-sm bg-[#E3E3E3] placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8D8D8D] focus:border-[#8D8D8D]">
                    <option value="" disabled>Selecteer een optie</option>
                    <option value="fish">Vis</option>
                    <option value="meat">Vlees</option>
                    <option value="vegan">Vegan</option>
                </select>
            </div>

            <!-- Dessert -->
            <div class="sm:col-span-3">
                <label for="dessert" class="block text-sm font-medium text-gray-700">Nagerecht</label>
                <select id="dessert" wire:model="dessert"
                        class="p-2 mt-1 block w-full rounded-md sm:text-sm bg-[#E3E3E3] placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8D8D8D] focus:border-[#8D8D8D]">
                    <option value="" disabled>Selecteer een optie</option>
                    <option value="sweet">Zoet (vegan)</option>
                    <option value="cheese">Kaasplankje</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="pt-5">
        <div class="flex justify-end">
            <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md bg-[#8D8D8D] hover:bg-[#949494]">
                Save
            </button>
        </div>
    </div>
</form>