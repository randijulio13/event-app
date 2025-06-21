import Alpine from "alpinejs";

export default () => ({
    step: Alpine.$persist(1),
    showVendorModal: false,
    currentVendorType: null,
    loading: false,
    form: Alpine.$persist({
        eventName: "",
        eventType: "",
        eventDate: "",
        groom: {
            name: "",
            birthdate: "",
            phone: "",
            father: "",
            mother: "",
        },
        bride: {
            name: "",
            birthdate: "",
            phone: "",
            father: "",
            mother: "",
        },
        selectedVendors: {},
    }),
    error: {
        eventName: "",
        eventType: "",
        eventDate: "",
        groom: {
            name: "",
            birthdate: "",
            phone: "",
            father: "",
            mother: "",
        },
        bride: {
            name: "",
            birthdate: "",
            phone: "",
            father: "",
            mother: "",
        },
        vendors: {},
    },
    availableVendors: {},
    vendorTypes: [
        {
            id: "Venue",
            label: "Venue",
            icon: "heroicon-o-building-office",
            description:
                "Tempat berlangsungnya acara, seperti gedung, ballroom, atau area outdoor.",
        },
        {
            id: "Catering",
            label: "Catering",
            icon: "heroicon-o-cake",
            description:
                "Penyedia makanan dan minuman untuk tamu selama acara berlangsung.",
        },
        {
            id: "Master Of Ceremony",
            label: "Master of Ceremony",
            icon: "heroicon-o-microphone",
            description:
                "Pembawa acara yang mengatur alur acara agar berjalan lancar dan menarik.",
        },
        {
            id: "Decoration",
            label: "Decoration",
            icon: "heroicon-o-sparkles",
            description:
                "Pihak yang bertanggung jawab atas estetika dan tata dekorasi tempat acara.",
        },
        {
            id: "Photographer",
            label: "Photographer",
            icon: "heroicon-o-camera",
            description:
                "Fotografer profesional untuk mengabadikan momen-momen penting selama acara.",
        },
        {
            id: "Music",
            label: "Music",
            icon: "heroicon-o-musical-note",
            description:
                "Pengisi hiburan musik, seperti band, penyanyi, atau DJ untuk suasana acara.",
        },
        {
            id: "Videographer",
            label: "Videographer",
            icon: "heroicon-o-video-camera",
            description:
                "Perekam video acara yang mengabadikan momen dalam bentuk dokumentasi visual.",
        },
    ],
    init() {
        // Initialize selectedVendors with empty values for each type
        this.vendorTypes.forEach((type) => {
            this.form.selectedVendors = {
                ...this.form.selectedVendors,
            };
        });
    },

    async openVendorModal(typeId) {
        this.currentVendorType = typeId;
        this.showVendorModal = true;
        this.loading = true;

        try {
            const response = await fetch(`/vendor-items/${typeId}`);
            const items = await response.json();
            this.availableVendors[typeId] = items;
        } catch (error) {
            console.error("Error fetching vendor items:", error);
            this.availableVendors[typeId] = [];
        }

        this.loading = false;
    },

    formatPrice(price) {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        }).format(price);
    },

    validateField(field) {
        this.error[field] = "";

        switch (field) {
            case "eventName":
                if (!this.form.eventName) {
                    this.error.eventName = "Event name is required";
                } else if (this.form.eventName.length < 3) {
                    this.error.eventName =
                        "Event name must be at least 3 characters";
                }
                break;
            case "eventDate":
                if (!this.form.eventDate) {
                    this.error.eventDate = "Event date is required";
                } else {
                    const selectedDate = new Date(this.form.eventDate);
                    const today = new Date();
                    if (selectedDate < today) {
                        this.error.eventDate =
                            "Event date cannot be in the past";
                    }
                }
                break;
            case "eventType":
                if (!this.form.eventType) {
                    this.error.eventType = "Event type is required";
                }
                break;
        }

        return !this.error[field];
    },

    validateWeddingField(person, field) {
        this.error[person][field] = "";

        switch (field) {
            case "name":
                if (!this.form[person][field]) {
                    this.error[person][field] = "Full name is required";
                } else if (this.form[person][field].length < 3) {
                    this.error[person][field] =
                        "Full name must be at least 3 characters";
                }
                break;
            case "birthdate":
                if (!this.form[person][field]) {
                    this.error[person][field] = "Birthdate is required";
                } else {
                    const birthDate = new Date(this.form[person][field]);
                    const today = new Date();
                    const age = today.getFullYear() - birthDate.getFullYear();
                    if (age < 17) {
                        this.error[person][field] =
                            "Must be at least 17 years old";
                    }
                }
                break;
            case "phone":
                if (!this.form[person][field]) {
                    this.error[person][field] = "Phone number is required";
                } else if (!/^[0-9]{10,13}$/.test(this.form[person][field])) {
                    this.error[person][field] = "Invalid phone number format";
                }
                break;
            case "father":
            case "mother":
                if (!this.form[person][field]) {
                    this.error[person][field] = `${
                        field.charAt(0).toUpperCase() + field.slice(1)
                    }'s name is required`;
                } else if (this.form[person][field].length < 3) {
                    this.error[person][field] = `${
                        field.charAt(0).toUpperCase() + field.slice(1)
                    }'s name must be at least 3 characters`;
                }
                break;
        }

        return !this.error[person][field];
    },

    validateVendors() {
        let isValid = true;
        this.error.vendors = {};

        // Check if at least one vendor is selected
        if (Object.values(this.form.selectedVendors).every((v) => !v)) {
            this.error.vendors.general = "Please select at least one vendor";
            isValid = false;
        }

        return isValid;
    },

    validateAll() {
        let isValid = true;

        // Validate main event fields
        ["eventName", "eventDate", "eventType"].forEach((field) => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });

        // If it's a wedding event, validate all wedding-related fields
        if (this.form.eventType === "wedding") {
            ["groom", "bride"].forEach((person) => {
                ["name", "birthdate", "phone", "father", "mother"].forEach(
                    (field) => {
                        if (!this.validateWeddingField(person, field)) {
                            isValid = false;
                        }
                    }
                );
            });
        }

        // Validate vendors in step 2
        if (this.step === 2) {
            if (!this.validateVendors()) {
                isValid = false;
            }
        }

        return isValid;
    },

    selectVendor(item) {
        this.form.selectedVendors[this.currentVendorType] = {
            id: item.id,
            name: item.name,
            price: item.price,
            vendor: item.vendor,
        };
        this.showVendorModal = false;
    },

    submitForm() {
        if (!this.validateAll()) return;

        // Here you can add your form submission logic
        console.log("Form submitted:", this.form);
        if (this.step === 1) {
            this.step = 2;
        } else if (this.step === 2) {
            // Handle final submission
            console.log("Final form submission:", this.form);
        }
    },

    getVendorStatus(typeId) {
        return this.form.selectedVendors[typeId] ? "selected" : "not-selected";
    },
});
