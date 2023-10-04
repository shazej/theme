import { Component} from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService, routes } from 'src/app/core/core.index';

@Component({
  selector: 'app-forgot-password',
  templateUrl: './forgot-password.component.html',
  styleUrls: ['./forgot-password.component.scss'],
})
export class ForgotPasswordComponent  {
  public routes = routes;
  public isValidConfirmPassword = false;
  public CustomControler: undefined;
  

  form = new FormGroup({
    email: new FormControl('', [Validators.required, Validators.email]),
    password: new FormControl('', [Validators.required]),
    confirmPassword: new FormControl('', [Validators.required]),
  });

  get f() {
    return this.form.controls;
  }

  constructor(private router: Router, private auth: AuthService) {}

  submit() {
    if (this.form.value.password != this.form.value.confirmPassword) {
      this.isValidConfirmPassword = true;
    } else {
      this.isValidConfirmPassword = false;
      this.auth.login();
    }
  }
 
}
