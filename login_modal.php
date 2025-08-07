<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institutional Login Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .demo-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .demo-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            animation: fadeIn 0.3s ease-out;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            position: relative;
            width: 90%;
            max-width: 450px;
            animation: slideIn 0.4s ease-out;
        }

        .glass-dark {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            color: white;
            padding: 2rem;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: white;
        }

        .modal-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .modal-header h2 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #fff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .modal-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select {
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-group select option {
            background: #2d3748;
            color: white;
        }

        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: white;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .remember-me input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .forgot-password {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: white;
        }

        .login-button {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .login-button:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .error-message {
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
            padding: 12px;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-top: 1rem;
            display: none;
        }

        .success-message {
            background: rgba(34, 197, 94, 0.2);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: #86efac;
            padding: 12px;
            border-radius: 8px;
            font-size: 0.9rem;
            margin-top: 1rem;
            display: none;
        }

        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.9);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 480px) {
            .modal-content {
                width: 95%;
                margin: 20px;
            }

            .glass-dark {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <button class="demo-button" onclick="openLoginModal()">🔐 Open Login Portal</button>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content glass-dark">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <div class="modal-header">
                <h2>🔐 Login Portal</h2>
                <p>Access your institutional dashboard</p>
            </div>
            <form class="login-form" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="userType">Login As:</label>
                    <select id="userType" name="userType" required>
                        <option value="">Select User Type</option>
                        <option value="institution">Institution Admin</option>
                        <option value="government">Government Official</option>
                        <option value="evaluator">Evaluator</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="username">Username / Email:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username or email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
                    </div>
                </div>

                <div class="remember-forgot">
                    <label class="remember-me">
                        <input type="checkbox" id="rememberMe" name="rememberMe">
                        Remember me
                    </label>
                    <a href="#" class="forgot-password" onclick="showForgotPassword()">Forgot Password?</a>
                </div>

                <button type="submit" class="login-button" id="loginButton">
                    Login
                    <div class="loading-spinner" id="loadingSpinner"></div>
                </button>

                <div class="error-message" id="errorMessage"></div>
                <div class="success-message" id="successMessage"></div>
            </form>
        </div>
    </div>

    <script>
        // Demo credentials for testing
        const demoCredentials = {
            institution: {
                username: 'admin@institution.edu',
                password: 'admin123'
            },
            government: {
                username: 'gov.official@ministry.gov',
                password: 'gov123'
            },
            evaluator: {
                username: 'evaluator@assessment.org',
                password: 'eval123'
            }
        };

        // Modal functions
        function openLoginModal() {
            document.getElementById('loginModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.remove('show');
            document.body.style.overflow = 'auto';
            clearMessages();
            resetForm();
        }

        // Password toggle
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.password-toggle');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = '👁️';
            }
        }

        // Form validation
        function validateForm(userType, username, password) {
            if (!userType) {
                throw new Error('Please select a user type');
            }

            if (!username || username.length < 3) {
                throw new Error('Username must be at least 3 characters long');
            }

            if (!password || password.length < 6) {
                throw new Error('Password must be at least 6 characters long');
            }

            return true;
        }

        // Authentication function
        function authenticateUser(userType, username, password) {
            const demo = demoCredentials[userType];

            if (demo && demo.username === username && demo.password === password) {
                return {
                    success: true,
                    user: {
                        type: userType,
                        username: username,
                        fullName: getFullName(userType),
                        permissions: getPermissions(userType)
                    }
                };
            }

            return {
                success: false,
                error: 'Invalid credentials. Please check your username and password.'
            };
        }

        // Helper functions
        function getFullName(userType) {
            const names = {
                institution: 'Dr. Sarah Johnson',
                government: 'Michael Chen',
                evaluator: 'Prof. Emily Rodriguez'
            };
            return names[userType] || 'User';
        }

        function getPermissions(userType) {
            const permissions = {
                institution: ['manage_courses', 'view_reports', 'student_management'],
                government: ['policy_review', 'audit_access', 'compliance_monitoring'],
                evaluator: ['assessment_tools', 'evaluation_reports', 'quality_assurance']
            };
            return permissions[userType] || [];
        }

        // Main login handler
        async function handleLogin(event) {
            event.preventDefault();

            const loginButton = document.getElementById('loginButton');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const form = event.target;

            // Get form data
            const formData = new FormData(form);
            const userType = formData.get('userType');
            const username = formData.get('username');
            const password = formData.get('password');
            const rememberMe = formData.get('rememberMe');

            // Clear previous messages
            clearMessages();

            try {
                // Validate form
                validateForm(userType, username, password);

                // Show loading state
                loginButton.disabled = true;
                loadingSpinner.style.display = 'inline-block';

                // Simulate API call delay
                await new Promise(resolve => setTimeout(resolve, 1500));

                // Authenticate user
                const result = authenticateUser(userType, username, password);

                if (result.success) {
                    showSuccessMessage(`Welcome back, ${result.user.fullName}!`);

                    // Store user session (in a real app, this would be handled securely)
                    sessionStorage.setItem('currentUser', JSON.stringify(result.user));

                    if (rememberMe) {
                        localStorage.setItem('rememberedUser', username);
                    }

                    // Redirect to dashboard after success
                    setTimeout(() => {
                        closeLoginModal();
                        showDashboard(result.user);
                    }, 1000);

                } else {
                    showErrorMessage(result.error);
                }

            } catch (error) {
                showErrorMessage(error.message);
            } finally {
                // Hide loading state
                loginButton.disabled = false;
                loadingSpinner.style.display = 'none';
            }
        }

        // Message functions
        function showErrorMessage(message) {
            const errorElement = document.getElementById('errorMessage');
            errorElement.textContent = message;
            errorElement.style.display = 'block';

            // Auto-hide after 5 seconds
            setTimeout(() => {
                errorElement.style.display = 'none';
            }, 5000);
        }

        function showSuccessMessage(message) {
            const successElement = document.getElementById('successMessage');
            successElement.textContent = message;
            successElement.style.display = 'block';
        }

        function clearMessages() {
            document.getElementById('errorMessage').style.display = 'none';
            document.getElementById('successMessage').style.display = 'none';
        }

        // Reset form
        function resetForm() {
            document.querySelector('.login-form').reset();
            document.getElementById('password').type = 'password';
            document.querySelector('.password-toggle').textContent = '👁️';
        }

        // Forgot password handler
        function showForgotPassword() {
            alert('Forgot password functionality would typically send a reset link to your email. For demo purposes, use the credentials shown in the console.');
            console.log('Demo Credentials:');
            console.log('Institution Admin: admin@institution.edu / admin123');
            console.log('Government Official: gov.official@ministry.gov / gov123');
            console.log('Evaluator: evaluator@assessment.org / eval123');
        }

        // Dashboard simulation
        function showDashboard(user) {
            alert(`Dashboard loaded for ${user.fullName} (${user.type})\nPermissions: ${user.permissions.join(', ')}`);
        }

        // Close modal when clicking outside
        document.getElementById('loginModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeLoginModal();
            }
        });

        // Handle ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeLoginModal();
            }
        });

        // Auto-fill remembered user on page load
        window.addEventListener('load', function() {
            const rememberedUser = localStorage.getItem('rememberedUser');
            if (rememberedUser) {
                document.getElementById('username').value = rememberedUser;
                document.getElementById('rememberMe').checked = true;
            }
        });

        // Show demo credentials in console
        console.log('=== DEMO CREDENTIALS ===');
        console.log('Institution Admin: admin@institution.edu / admin123');
        console.log('Government Official: gov.official@ministry.gov / gov123');
        console.log('Evaluator: evaluator@assessment.org / eval123');
    </script>
</body>

</html>