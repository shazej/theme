import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomerDetailsPaidComponent } from './customer-details-paid.component';

describe('CustomerDetailsPaidComponent', () => {
  let component: CustomerDetailsPaidComponent;
  let fixture: ComponentFixture<CustomerDetailsPaidComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CustomerDetailsPaidComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CustomerDetailsPaidComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
